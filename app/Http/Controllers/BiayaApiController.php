<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class BiayaApiController extends Controller
{
    public function getBiaya()  {
       $myCookieValue = request()->cookie('__bpjph_ct');
        $RefreshToken = request()->cookie('__bpjph_rt');
    
        $client = new Client(['headers' => ['Cookie' => '__bpjph_ct='.$myCookieValue.';__bpjph_rt='.$RefreshToken]]);

        $response = $client->get("http://dev-lph-api.halal.go.id/api/v1/costs?order_dir=desc");
        if($response->getStatusCode()==200){
            $data = json_decode($response->getBody(),true);
            $biaya = $data["payload"];
            return $biaya;
            $this->updateBiaya($biaya);
        }
        else{

        }
    }
    public function postBiaya()  {
         $myCookieValue = request()->cookie('__bpjph_ct');
        $RefreshToken = request()->cookie('__bpjph_rt');
    
        $client = new Client(['headers' => ['Cookie' => '__bpjph_ct='.$myCookieValue.';__bpjph_rt='.$RefreshToken]]);
        $response = $client->post("http://dev-lph-api.halal.go.id/api/v1/costs", [
        "json" => [
            "id_reg" => request("reg"),
            "keterangan" => request("keterangan"),
            "qty" => request("qty"),
            "harga" => request("harga"),
        ],
        
    ]);

        if($response->getStatusCode()==200){
            $dataid = json_decode($response->getBody(),true);
            return $dataid;
        }
    }
    public function updateBiaya($idbiaya)  {
         $myCookieValue = request()->cookie('__bpjph_ct');
        $RefreshToken = request()->cookie('__bpjph_rt');
        
        $client = new Client(['headers' => ['Cookie' => '__bpjph_ct='.$myCookieValue.';__bpjph_rt='.$RefreshToken]]);

        $response = $client->put("http://dev-lph-api.halal.go.id/api/v1/costs/$idbiaya",[
            "json"=>[
                "id_reg"=>request("id_reg"),
                "keterangan"=>request("keterangan"),
                "qty"=>request("qty"),
                "harga"=>request("harga"),
            ]
        ]);
        if($response->getStatusCode()==200){
               $data = json_decode($response->getBody(),true);
            return $data;
        }
    }
    public function singleBiaya($id) {
          $myCookieValue = request()->cookie('__bpjph_ct');
        $RefreshToken = request()->cookie('__bpjph_rt');
    
        $client = new Client(['headers' => ['Cookie' => '__bpjph_ct='.$myCookieValue.';__bpjph_rt='.$RefreshToken]]);

        $response = $client->get("http://dev-lph-api.halal.go.id/api/v1/costs?order_dir=desc");
        if($response->getStatusCode()==200){
            $data = json_decode($response->getBody(),true);

            $biaya = $data["payload"];

            foreach( $biaya as $b){
                $b;
            }
            

            return $b['id_biaya'] == $id;

        }
        else{

        }
    }
}
