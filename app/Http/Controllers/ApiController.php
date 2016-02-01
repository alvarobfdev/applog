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
        $facturas = json_decode($data, true);

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
        return $response;
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
}