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
             return view("reg.view",["regis"=>$regis]);
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
    
        return $product;
            //  return view("reg.view",["factory"=>$factory]);
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
        $product =  $data["payload"]["pu"];
    
        return $product;
            //  return view("reg.view",["factory"=>$factory]);
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
        $product =  $data["payload"]["penyelia"];
    
        return $product;
            //  return view("reg.view",["factory"=>$factory]);
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
        $product =  $data["payload"]["documents"];
    
        return $product;
            //  return view("reg.view",["factory"=>$factory]);
        } else {
           null;
        }
    }
    
}


