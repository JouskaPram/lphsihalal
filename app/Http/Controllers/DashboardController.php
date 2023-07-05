<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class DashboardController extends Controller
{
    public function Dashboard() {
        $lph = env("LPH_MAPED");
        $url = env("LPH_URL");
        $myCookieValue = request()->cookie('__bpjph_ct');
    $RefreshToken = request()->cookie('__bpjph_rt');
    
    $client = new Client(['headers' => ['Cookie' => '__bpjph_ct='.$myCookieValue.';__bpjph_rt='.$RefreshToken]]);
    $response = $client->get("$url/data_list/10010/$lph", [

    ]);
    $res = $client->get("$url/data_list/10020/$lph", [

    ]);
    $proses = $client->get("$url/data_list/10030/$lph", [

    ]);
    $resbiaya = $client->get("$url/data_list/10040/$lph", [

    ]);

    if($response->getStatusCode() == 200){
       
        $data = json_decode($response->getBody(), true);
        $biaya = json_decode($resbiaya->getBody(),true);
        $proses = json_decode($proses->getBody(),true);
        $totalproses = count($proses["payload"]);
        $res = json_decode($res->getBody(),true);
        $penanganan = count($res["payload"]);
        $totalbiaya = $biaya["count"];
        $datalist = $data["payload"];

        
        $count = count($datalist);
        $config = [
            'menu-active' => 'dashboard'
        ];
     
        return view("dashboard",["count"=>$count,"totalbiaya"=>$totalbiaya,"penanganan"=>$penanganan,"totalproses"=>$totalproses],compact("config"));
    }
    else{
        null;
    }
    }
}
