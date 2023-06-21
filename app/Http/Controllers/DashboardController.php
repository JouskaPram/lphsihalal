<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class DashboardController extends Controller
{
    public function Dashboard() {
        $lph = env("LPH_MAPED");
        $myCookieValue = request()->cookie('__bpjph_ct');
    $RefreshToken = request()->cookie('__bpjph_rt');
    
    $client = new Client(['headers' => ['Cookie' => '__bpjph_ct='.$myCookieValue.';__bpjph_rt='.$RefreshToken]]);
    $response = $client->get("http://dev-lph-api.halal.go.id/api/v1/data_list/10010/$lph", [

    ]);
    $resbiaya = $client->get("http://dev-lph-api.halal.go.id/api/v1/costs", [

    ]);
    $resinvoce = $client->get("http://dev-lph-api.halal.go.id/api/v1/invoice/$lph");

    if($response->getStatusCode() == 200){
       
        $data = json_decode($response->getBody(), true);
        $biaya = json_decode($resbiaya->getBody(),true);
        $invoice = json_decode($resinvoce->getBody(),true);
        $totalbiaya = count($biaya["payload"]);
        $datalist = $data["payload"];
        $totalInvoice = count($invoice["payload"]);
        
        $count = count($datalist);
        $config = [
            'menu-active' => 'dashboard'
        ];
     
        return view("dashboard",["count"=>$count,"totalbiaya"=>$totalbiaya,"totalInvoice"=>$totalInvoice],compact("config"));
    }
    else{
        null;
    }
    }
}
