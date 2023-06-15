<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class DataListApi extends Controller
{
    public function GetDataList(Request $request)
    {
    $myCookieValue = request()->cookie('__bpjph_ct');
    $RefreshToken = request()->cookie('__bpjph_rt');
    
    $client = new Client(['headers' => ['Cookie' => '__bpjph_ct='.$myCookieValue.';__bpjph_rt='.$RefreshToken]]);
    $response = $client->get("http://dev-lph-api.halal.go.id/api/v1/data_list/10010/7F431C7E-9B3C-41D9-A9C0-8C4B2BCB624C", [

    ]);
    if ($response->getStatusCode() == 200) {
        $data = json_decode($response->getBody(), true);
        $datalist = $data["payload"];
        return view("datalist.view",["datalist"=>$datalist]);
    } else {
        return null; // or handle the error in an appropriate way
    };

    
}
    public function getReg($reg) {
        $myCookieValue = request()->cookie('__bpjph_ct');
    $RefreshToken = request()->cookie('__bpjph_rt');
    
    $client = new Client(['headers' => ['Cookie' => '__bpjph_ct='.$myCookieValue.';__bpjph_rt='.$RefreshToken]]);
    $response = $client->get("http://dev-lph-api.halal.go.id/api/v1/reg/$reg");
    if($response->getStatusCode()==200){
        $data = json_decode($response->getBody(),true);
        $reg = $data["payload"];
        return $reg;
    }
    }

}
