<?php
/**
 * Created by PhpStorm.
 * User: alvarobanofos
 * Date: 29/1/16
 * Time: 12:03
 */

namespace App\Http\Controllers;



use App\Models\FacturasWeb;
use App\User;
use Carbon\Carbon;

class ApiController extends Controller
{

    private $webInvoicesToAdd = array();
    private $webInvoicesToModify = array();
    private $webInvoicesToDelete = array();

    private $invoicesToWebRefresh = array();
    private $tmpDir = null;


    public function postPdfInvoice()
    {
        $data = \Request::get("jsonData");
        $data = utf8_encode($data);
        $facturas = json_decode($data, true);

        //$view = $this->viewInvoice($facturas[0]);
        //return $view;

        /*Generamos ZIP*/
        $uid = uniqid();
        $zip = new \Chumper\Zipper\Zipper;
        $zip->make(storage_path() . "/app/tmp/$uid/facturas.zip");

        $tmpDir = "/tmp/$uid";
        $this->tmpDir = $tmpDir;

        /*Insertamos cada factura en el zip*/
        foreach ($facturas as $factura) {
            $view = $this->viewInvoice($factura);

            $nombreFact = "factura-{$factura['id']['serfac']}-{$factura['id']['ejefac']}-{$factura['id']['numfac']}.pdf";
            $pdfContents = \PDF::loadHTML($view)->setPaper('a4')->setOption('margin-right', 0)->setOption('margin-bottom', 0)->setOption('margin-left', 0)->setOption('margin-top', 0)->output();
            $zip->addString($nombreFact, $pdfContents);
            $uidPdf = uniqid();

            \File::put(storage_path("app") . "$tmpDir/$uidPdf.pdf", $pdfContents);
            $this->invoicesToWebRefresh[$uidPdf] = $factura;
            $return = refreshWeb();

            if($return != "ok") {
                die("error!");
            }
        }

        /*Cerramos ZIP, eliminamos temportal y  descargamos*/
        $zip->close();
        $response = \Response::make(file_get_contents(storage_path() . "/app/tmp/$uid/facturas.zip"));
        \Storage::drive("local")->deleteDirectory("tmp/$uid");
        $response->header('Content-Disposition', 'attachment; filename="facturas.zip"');
        $response->header('Content-Length', strlen($response->getOriginalContent()));
        \File::deleteDirectory(storage_path("app") . "/tmp/$uid");
        return $response;
    }

    public function refreshWeb() {
        foreach($this->invoicesToWebRefresh as $facturaName => $factura) {

            if ($factura["web"]) {

                if ($this->webInvoiceExists($factura)) {
                    $return = $this->addWebInvoiceToModify($factura, null, $this->tmpDir."/$facturaName.pdf", $facturaName);
                } else {
                    $return = $this->addWebInvoiceToAdd($factura, null, $this->tmpDir."/$facturaName.pdf", $facturaName);
                }
            } else {
                if ($this->webInvoiceExists($factura)) {
                    $return = $this->addWebInvoiceToDelete($factura);
                }
            }
        }

        $return = $this->refreshWebDB();

        return $return;
    }


    public function postPdfInvoicesSummary()
    {
        $data = \Request::get("jsonData");
        $facturas = json_decode($data, true);
        $data['facturas'] = $facturas;
        $view = view('factura.invoicesSummary', $data)->render();
        \PDF::loadHTML($view)->setPaper('a4')->setOption('margin-right', 0)->setOption('margin-bottom', 0)->setOption('margin-left', 0)->setOption('margin-top', 0)->download();


    }

    private function groupsInvoice($factura)
    {
        $groups = array();

        foreach ($factura['lines'] as $index => $line) {
            if (array_key_exists($line['aplica'], FacturaController::$GROUPS_DESCRIPTIONS)) {
                if (!isset($groups[$line['aplica']]["importe"]))
                    $groups[$line['aplica']]["importe"] = 0;

                $groups[$line['aplica']]["descripcion"] = FacturaController::$GROUPS_DESCRIPTIONS[$line['aplica']];
                $groups[$line['aplica']]["importe"] += $line['import_'];
            }
        }

        return $groups;
    }

    private function viewInvoice($factura)
    {

        $data['factura'] = $factura;
        $data['groups'] = $this->groupsInvoice($factura);
        $view = view('factura.pdfInvoice', $data)->render();
        return $view;
    }

    public function postRefreshPdfWeb()
    {

        try {
            $data = \Request::get("jsonData");
            $data = utf8_encode($data);
            $facturas = json_decode($data, true);
            $uidFolder = uniqid();
            $tmpDir = "/tmp/$uidFolder";
            \File::makeDirectory(storage_path("app") . $tmpDir);

            $ftpConnection = \FTP::connection();
            $facturasPost = array();

            $return = "ok";

            foreach ($facturas as $factura) {


                if ($factura["web"]) {

                    if ($this->webInvoiceExists($factura)) {
                        $return = $this->addWebInvoiceToModify($factura, $tmpDir);
                    } else {
                        $return = $this->addWebInvoiceToAdd($factura, $tmpDir);
                    }
                } else {
                    if ($this->webInvoiceExists($factura)) {
                        $return = $this->addWebInvoiceToDelete($factura);
                    }
                }

                if ($return != "ok") {
                    return "error: " . $return;
                }
            }

            \File::deleteDirectory($tmpDir);


            $return = $this->refreshWebDB();


            if ($return != "ok") {
                return "error: " . $return;
            }

            return "ok";


        } catch (\Exception $e) {
            return "error: " .$e->getMessage()." ". $e->getTraceAsString();
        }
    }

    private function sendPostRequest($url, $data)
    {
        // use key 'http' even if you send the request to https://...
        $options = array(
            'http' => array(
                'header' => "Content-type: application/x-www-form-urlencoded\r\n",
                'method' => 'POST',
                'content' => http_build_query($data),
            ),
        );
        $context = stream_context_create($options);
        $result = file_get_contents($url, false, $context);
        return $result;
    }

    private function webInvoiceExists($factura) {

        return (FacturasWeb::where("ejercicio", $factura["id"]["ejefac"])->where("num_factura", $factura["id"]["numfac"])->count() > 0);
    }

    private function addWebInvoiceToAdd($factura, $tmpDir, $pdfPath = null, $uidPdf = null)
    {
        $ftpConnection = \FTP::connection();

        if($pdfPath == null || $uidPdf == null)
            list($uidPdf, $pdfPath) = $this->savePdf($factura, $tmpDir);


        if (!$ftpConnection->uploadFile($pdfPath, "httpsdocs/facturas/$uidPdf.pdf")) {
            return "error: Fallo al cargar factura $uidPdf.pdf a la web";
        }

        //Guardamos en bbdd intermedia
        $facturaModel = new FacturasWeb();
        $facturaModel->fecha = Carbon::parse($factura["fecfac"])->format("Y-m-d");
        $facturaModel->ejercicio = $factura["id"]["ejefac"];
        $facturaModel->num_factura = $factura["id"]["numfac"];
        $facturaModel->cliente_id = $factura["codcli"];
        $facturaModel->total_factura = $factura["totfac"];
        $facturaModel->file_pdf = "$uidPdf.pdf";
        $facturaModel->save();

        $this->webInvoicesToAdd[] = [
            "fecha" => $facturaModel->fecha,
            "ejercicio" => $facturaModel->ejercicio,
            "num_factura" => $facturaModel->num_factura,
            "cliente_id" => $facturaModel->cliente_id,
            "total_factura" => $facturaModel->total_factura,
            "file_pdf" => $facturaModel->file_pdf
        ];

        \FTP::disconnect();

        return "ok";
    }

    private function addWebInvoiceToModify($factura, $tmpDir, $pdfPath = null, $uidPdf = null) {
        $facturaModel = FacturasWeb::where("ejercicio", $factura["id"]["ejefac"])->where("num_factura", $factura["id"]["numfac"])->firstOrFail();
        $pdfName = $facturaModel->file_pdf;

        $ftpConnection = \FTP::connection();
        $ftpConnection->delete("httpsdocs/facturas/$pdfName");

        if($pdfPath == null || $uidPdf == null)
            list($uidPdf, $pdfPath) = $this->savePdf($factura, $tmpDir);

        if (!$ftpConnection->uploadFile($pdfPath, "httpsdocs/facturas/$uidPdf.pdf")) {
            return "error: Fallo al cargar factura $uidPdf.pdf a la web";
        }

        $facturaModel->fecha = Carbon::parse($factura["fecfac"])->format("Y-m-d");
        $facturaModel->cliente_id = $factura["codcli"];
        $facturaModel->total_factura = $factura["totfac"];
        $facturaModel->file_pdf = "$uidPdf.pdf";
        $facturaModel->save();

        $this->webInvoicesToModify[] = [
            "fecha" => $facturaModel->fecha,
            "ejercicio" => $facturaModel->ejercicio,
            "num_factura" => $facturaModel->num_factura,
            "cliente_id" => $facturaModel->cliente_id,
            "total_factura" => $facturaModel->total_factura,
            "file_pdf" => $facturaModel->file_pdf
        ];

        \FTP::disconnect();

        return "ok";
    }

    private function addWebInvoiceToDelete($factura) {
        $facturaModel = FacturasWeb::where("ejercicio", $factura["id"]["ejefac"])->where("num_factura", $factura["id"]["numfac"])->firstOrFail();
        $pdfName = $facturaModel->file_pdf;
        $ftpConnection = \FTP::connection();
        $ftpConnection->delete("httpsdocs/facturas/$pdfName");

        echo "httpsdocs/facturas/$pdfName";

        $this->webInvoicesToDelete[] = [
            "fecha" => $facturaModel->fecha,
            "ejercicio" => $facturaModel->ejercicio,
            "num_factura" => $facturaModel->num_factura,
            "cliente_id" => $facturaModel->cliente_id,
            "total_factura" => $facturaModel->total_factura,
            "file_pdf" => $facturaModel->file_pdf
        ];

        $facturaModel->delete();
        return "ok";
    }

    /**
     * @param $factura
     * @param $tmpDir
     * @return array
     */
    private function savePdf($factura, $tmpDir)
    {
        $view = $this->viewInvoice($factura);
        $view = str_replace("localhost:8080", "localhost", $view);
        $uidPdf = uniqid();
        $pdfPath = storage_path("app") . "$tmpDir/$uidPdf.pdf";

        \PDF::loadHTML($view)->setPaper('a4')->setOption('margin-right', 0)
            ->setOption('margin-bottom', 0)->setOption('margin-left', 0)->setOption('margin-top', 0)
            ->save($pdfPath);
        return array($uidPdf, $pdfPath);
    }

    /**
     * @return string
     */
    private function refreshWebDB()
    {
        $return = "ok";

        if (count($this->webInvoicesToAdd) > 0) {
            $postData = ["jsonData" => json_encode($this->webInvoicesToAdd)];
            $return = $this->sendPostRequest("https://clientes.logival.es/api.php?user=api&pass=logivalapp&function=addInvoice", $postData);
        }

        if (count($this->webInvoicesToModify) > 0) {
            $postData = ["jsonData" => json_encode($this->webInvoicesToModify)];
            $return = $this->sendPostRequest("https://clientes.logival.es/api.php?user=api&pass=logivalapp&function=modifyInvoice", $postData);
        }

        if (count($this->webInvoicesToDelete) > 0) {
            $postData = ["jsonData" => json_encode($this->webInvoicesToDelete)];
            $return = $this->sendPostRequest("https://clientes.logival.es/api.php?user=api&pass=logivalapp&function=deleteInvoice", $postData);
            return $return;
        }
        return $return;
    }


}