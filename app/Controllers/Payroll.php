<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use Dompdf\Options;

class Payroll extends BaseController    
{
    public function index(){

        
        $data['title'] = "Create Payroll";
        $data['adviserlist'] = array("Bobby", "Josh", "Caleb");
        $data['months'] = array("January", "Febuary", "March", "April", "May", "June", "July", "August");
        $data['years'] = array(2017, 2018, 2019, 2020, 2017, 2021);
        $data['days'] = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
        
        
        $request = \Config\Services::request();

        $data['clientnumber'] = $request->getVar('clientnumber');
        $data['clientname'] = $request->getVar('clientname');
        $data['elitecomissions'] = $request->getVar('elitecomissions');
        //leave clientnumber 0 for later, figure out after pdf prints all values

        $data['clientnumber'] = 1;
        //echo $adviser.$clientnumber.$balance.$bonus;

        $data['invoice'] = (object) array([
            'clientname' => $data['clientname'],
            'elitecomissions =>' => $data['elitecomissions'],
        ]);

        return view('header')
            . view('createpayroll', $data);
	}
    
    public function showpayroll()
    {
        
        $data['adviserlist'] = array("Bobby", "Josh", "Caleb");
        return view('header')
            . view('payrollslip',$data);
    }

    public function testdata()
    {   
        $request = \Config\Services::request();
        //print_r($request->getMethod());
        $data['bonus'] = $request->getPost('bonus');
        $data['balance'] = $request->getPost('balance');

        print_r($data['bonus']);
        return view('testdata', $data);

    }

    public function createpdf()
    {
        $options = new Options();
        $options->set('isPhpEnabled', 'true');
        $options->set('isRemoteEnabled', 'true');
        $options->set('isJavascriptEnabled', 'true');
        $options->setDefaultFont('Courier');

        $dompdf = new \Dompdf\Dompdf($options);
        //$html = "<h1>Test pdf</h1>";
        
        $request = \Config\Services::request();
        
        $title = "Buyer created Tax Invoice";

        $adviser = $request->getPost('adviser');
        $month = $request->getPost('month');
        $day = $request->getPost('day');
        $year = $request->getPost('year');
        $balance = $request->getPost('balance');
        $leads = $request->getVar('leads');
        $charge = $request->getVar('charge');
        $bonus = $request->getVar('bonus');
        $release = $request->getVar('release');
        $clientnumber = $request->getVar('clientnumber');
        $clientname = $request->getVar('clientname');
        $elitecomissions = $request->getVar('elitecomissions');
        $net = .6 * $elitecomissions;
        $tax = .05 * $net;
        $totalpayment = $net - $tax;

        $html = '<div style="width:100%; justify-content:center; text-align-center; display:flex; margin-top:15px; margin-bottom:15px;">';
        $html .= '<h2 style="color:blue; justify-content:center; text-align-center;">' . $title . '</h2></div>';
        $html .= '<strong>Adviser: </strong>'. $adviser . '</div> <br>';
        $html .= '<strong>Date: </strong>'. $month . ' ' . $day . ', ' . $year . '</div><br>';
        $html .= '<br><strong>Leads Purchased: </strong>'. $leads . '</div><br>';
        $html .= '<strong>Issue Charged: </strong>'. $charge . '</div><br>';
        $html .= '<strong>Bonuses: </strong>'. $bonus . '</div><br>';
        $html .= '<strong>Agency Release: </strong>'. $release . '</div><br>';
       // $html .= '<strong>Bonus: </strong>'. $bonus . '</div><br>';
        $html .= '<br><strong>Client number: </strong>'. $clientnumber . '</div><br>';
        $html .= '<strong>Client name: </strong>'. $clientname . '</div><br>';
        $html .= '<strong>Comissions sum: </strong> $'. $elitecomissions . '</div><br>';
        $html .= '<br><strong>Net: </strong> $'. $net . '</div><br>';
        $html .= '<strong>Tax: </strong> $'. $tax . '</div><br>';
        $html .= '<strong>Total payment: </strong> $'. $totalpayment . '</div><br>';

        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();
        $dompdf->stream("Student List");
    }
}
