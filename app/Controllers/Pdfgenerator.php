<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use Dompdf\Options;

class Pdfgenerator extends BaseController
{
    public function index()
    {
        echo "hello";
    }

    public function makepdf()
    {
        
        $options = new Options();
        $options->set('isPhpEnabled', 'true');
        $options->set('isRemoteEnabled', 'true');
        $options->set('isJavascriptEnabled', 'true');

        $dompdf = new \Dompdf\Dompdf($options);
        //$html = "<h1>Test pdf</h1>";
        $html = '<div style="width:100%; justify-content:center; text-align-center; display:flex; margin-top:15px; margin-bottom:15px;">';
        $html .= 

        $dompdf->loadHtml(view('testdata'));
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();
        $dompdf->stream("Student List");
    }
}
