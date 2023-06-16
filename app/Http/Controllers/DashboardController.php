<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function Dashboard() {
        $myCookieValue = request()->cookie('__bpjph_ct');
    $RefreshToken = request()->cookie('__bpjph_rt');
    
    $client = new Client(['headers' => ['Cookie' => '__bpjph_ct='.$myCookieValue.';__bpjph_rt='.$RefreshToken]]);
    $response = $client->get("http://dev-lph-api.halal.go.id/api/v1/data_list/10010/7F431C7E-9B3C-41D9-A9C0-8C4B2BCB624C", [

    ]);
    if($response->getStatusCode() == 200){
        $data = json_decode($response->getBody(), true);
        $datalist = $data["payload"];
        $count = count($datalist);
        return view("dashboard",["count"=>$count]);
    }
    else{
        null;
    }
    }
}
