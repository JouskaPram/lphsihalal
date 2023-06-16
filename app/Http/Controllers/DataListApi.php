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
        $count= $data["payload"];
        $total = count($count);
        return view("datalist.view",["datalist"=>$datalist,"total"=>$total]);
    } else {
        return null; 
    };

    
}
    public function getReg($reg) {
    $myCookieValue = request()->cookie('__bpjph_ct');
    $RefreshToken = request()->cookie('__bpjph_rt');

    $client = new Client(['headers' => ['Cookie' => '__bpjph_ct='.$myCookieValue.';__bpjph_rt='.$RefreshToken]]);
    $response = $client->get("http://dev-lph-api.halal.go.id/api/v1/reg/$reg");
    
    if ($response->getStatusCode() == 200) {
        $data = json_decode($response->getBody(), true);

    
            $regis = $data["payload"];
            // return $regis;
             return view("datalist.reg.view",["regis"=>$regis]);
        } else {
           null;
        }
    }

    public function getFactory($reg) {
         $myCookieValue = request()->cookie('__bpjph_ct');
    $RefreshToken = request()->cookie('__bpjph_rt');

    $client = new Client(['headers' => ['Cookie' => '__bpjph_ct='.$myCookieValue.';__bpjph_rt='.$RefreshToken]]);
    $response = $client->get("http://dev-lph-api.halal.go.id/api/v1/reg/$reg");

    if ($response->getStatusCode() == 200) {
        $data = json_decode($response->getBody(), true);
        $factory =  $data["payload"]["factories"];
    
            $regis = $data["payload"];
             return view("reg.detail.factory",["factory"=>$factory,"regis"=>$regis]);
        } else {
           null;
        }
    }
    public function getProduct($reg) {
         $myCookieValue = request()->cookie('__bpjph_ct');
    $RefreshToken = request()->cookie('__bpjph_rt');

    $client = new Client(['headers' => ['Cookie' => '__bpjph_ct='.$myCookieValue.';__bpjph_rt='.$RefreshToken]]);
    $response = $client->get("http://dev-lph-api.halal.go.id/api/v1/reg/$reg");
    if ($response->getStatusCode() == 200) {
        $data = json_decode($response->getBody(), true);
        $product =  $data["payload"]["products"];
        $regis = $data["payload"];
        
         return view("reg.detail.product",["product"=>$product,"regis"=>$regis]);
        } else {
           null;
        }
    }
    public function getPu($reg) {
         $myCookieValue = request()->cookie('__bpjph_ct');
    $RefreshToken = request()->cookie('__bpjph_rt');

    $client = new Client(['headers' => ['Cookie' => '__bpjph_ct='.$myCookieValue.';__bpjph_rt='.$RefreshToken]]);
    $response = $client->get("http://dev-lph-api.halal.go.id/api/v1/reg/$reg");
    if ($response->getStatusCode() == 200) {
        $data = json_decode($response->getBody(), true);
        $pu =  $data["payload"]["pu"];
        $regis =  $data["payload"];
        // return $pu
        return view("reg.detail.perusahaan",["pu"=>$pu,"regis"=>$regis]);
        } else {
           null;
        }
    }
    public function getPenyelia($reg) {
         $myCookieValue = request()->cookie('__bpjph_ct');
    $RefreshToken = request()->cookie('__bpjph_rt');

    $client = new Client(['headers' => ['Cookie' => '__bpjph_ct='.$myCookieValue.';__bpjph_rt='.$RefreshToken]]);
    $response = $client->get("http://dev-lph-api.halal.go.id/api/v1/reg/$reg");
    if ($response->getStatusCode() == 200) {
        $data = json_decode($response->getBody(), true);
        $penyelia =  $data["payload"]["penyelia"][0];
        $regis =  $data["payload"];
   
             return view("reg.detail.penyelia",["penyelia"=>$penyelia,"regis"=>$regis]);
        } else {
           null;
        }
    }
    public function getDocuments($reg) {
         $myCookieValue = request()->cookie('__bpjph_ct');
    $RefreshToken = request()->cookie('__bpjph_rt');

    $client = new Client(['headers' => ['Cookie' => '__bpjph_ct='.$myCookieValue.';__bpjph_rt='.$RefreshToken]]);
    $response = $client->get("http://dev-lph-api.halal.go.id/api/v1/reg/$reg");
    if ($response->getStatusCode() == 200) {
        $data = json_decode($response->getBody(), true);
        $doc =  $data["payload"]["documents"];
        $regis =  $data["payload"];
    
      
        return view("reg.detail.documents",["doc"=>$doc,"regis"=>$regis]);
        } else {
           null;
        }
    }
    
}


