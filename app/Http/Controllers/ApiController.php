<?php
/**
 * Created by PhpStorm.
 * User: alvarobanofos
 * Date: 29/1/16
 * Time: 12:03
 */

namespace App\Http\Controllers;



use Carbon\Carbon;

class ApiController extends Controller
{
    public function postPdfInvoice() {
        $data = \Request::get("jsonData");
        $data = utf8_encode($data);
        $facturas = json_decode($data, true);

        //$view = $this->viewInvoice($facturas[0]);
        //return $view;

        /*Generamos ZIP*/
        $uid = uniqid();
        $zip = new \Chumper\Zipper\Zipper;
        $zip->make(storage_path() ."/app/tmp/$uid/facturas.zip");

        /*Insertamos cada factura en el zip*/
        foreach($facturas as $factura) {
            $view = $this->viewInvoice($factura);

            $nombreFact = "factura-{$factura['id']['serfac']}-{$factura['id']['ejefac']}-{$factura['id']['numfac']}.pdf";
            $pdfContents = \PDF::loadHTML($view)->setPaper('a4')->setOption('margin-right', 0)->setOption('margin-bottom', 0)->setOption('margin-left', 0)->setOption('margin-top', 0)->output();
            $zip->addString($nombreFact, $pdfContents);
        }

        /*Cerramos ZIP, eliminamos temportal y  descargamos*/
        $zip->close();
        $response = \Response::make(file_get_contents(storage_path() ."/app/tmp/$uid/facturas.zip"));
        \Storage::drive("local")->deleteDirectory("tmp/$uid");
        $response->header('Content-Disposition', 'attachment; filename="facturas.zip"');
        $response->header('Content-Length',strlen($response->getOriginalContent()));

        return $response;
    }


    public function postPdfInvoicesSummary() {
        $data = \Request::get("jsonData");
        $facturas = json_decode($data, true);
        $data['facturas'] = $facturas;
        $view = view('factura.invoicesSummary', $data)->render();
        \PDF::loadHTML($view)->setPaper('a4')->setOption('margin-right', 0)->setOption('margin-bottom', 0)->setOption('margin-left', 0)->setOption('margin-top', 0)->download();


    }

    private function groupsInvoice($factura) {
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

    private function viewInvoice($factura) {

        $data['factura'] = $factura;
        $data['groups'] = $this->groupsInvoice($factura);
        $view = view('factura.pdfInvoice', $data)->render();
        return $view;
    }

    public function postRefreshPdfWeb() {

        try {
            $data = \Request::get("jsonData");
            $data = utf8_encode($data);
            $facturas = json_decode($data, true);
            $uidFolder = uniqid();
            \File::makeDirectory(storage_path("app") . "/tmp/$uidFolder");

            $ftpConnection = \FTP::connection();
            $facturasPost = array();


            foreach ($facturas as $factura) {


                $view = $this->viewInvoice($factura);
                $view = str_replace("localhost:8080", "localhost", $view);

                $uidPdf = uniqid();

                $pdfPath = storage_path("app") . "/tmp/$uidFolder/$uidPdf.pdf";

                \PDF::loadHTML($view)->setPaper('a4')->setOption('margin-right', 0)
                    ->setOption('margin-bottom', 0)->setOption('margin-left', 0)->setOption('margin-top', 0)
                    ->save($pdfPath);

                if(!$ftpConnection->uploadFile($pdfPath, "httpsdocs/facturas/$uidPdf.pdf")) {
                    return "error: Fallo al cargar factura $uidPdf.pdf a la web";
                }


                \File::deleteDirectory($pdfPath);



                $facturasPost[] = [
                    "fecha" => Carbon::parse($factura["fecfac"])->format("Y-m-d"),
                    "ejercicio" => $factura["id"]["ejefac"],
                    "num_factura" => $factura["id"]["numfac"],
                    "cliente_id" => $factura["codcli"],
                    "total_factura" => $factura["totfac"],
                    "file_pdf" => "$uidPdf.pdf"
                ];

            }

            $postData = ["jsonData" => json_encode($facturasPost)];
            $result = $this->sendPostRequest("https://clientes.logival.es/api.php?user=api&pass=logivalapp&function=addInvoice", $postData);

            if($result != "ok") {
                return "error: ".$result;
            }

            return "ok";


        } catch(\Exception $e) {
            return "error: " . $e->getMessage();
        }
    }

    private function sendPostRequest($url, $data) {
        // use key 'http' even if you send the request to https://...
        $options = array(
            'http' => array(
                'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
                'method'  => 'POST',
                'content' => http_build_query($data),
            ),
        );
        $context  = stream_context_create($options);
        $result = file_get_contents($url, false, $context);
        return $result;
    }


}