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

            return view("biaya.view",["biaya"=>$biaya]);
        }
        else{

        }
    }
    public function postBiayaLayout() {
         $myCookieValue = request()->cookie('__bpjph_ct');
    $RefreshToken = request()->cookie('__bpjph_rt');
    
    $client = new Client(['headers' => ['Cookie' => '__bpjph_ct='.$myCookieValue.';__bpjph_rt='.$RefreshToken]]);
    $response = $client->get("http://dev-lph-api.halal.go.id/api/v1/data_list/10010/7F431C7E-9B3C-41D9-A9C0-8C4B2BCB624C", [

    ]);
    if($response->getStatusCode() == 200){
        $data = json_decode($response->getBody(),true);
        $reg = $data["payload"];
        return view("biaya.post",["reg"=>$reg]);
    }
    else{
        null;
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


    public function updateBiaya($id)  {
         $myCookieValue = request()->cookie('__bpjph_ct');
        $RefreshToken = request()->cookie('__bpjph_rt');
        
        $client = new Client(['headers' => ['Cookie' => '__bpjph_ct='.$myCookieValue.';__bpjph_rt='.$RefreshToken]]);

        $response = $client->put("http://dev-lph-api.halal.go.id/api/v1/costs/$id",[
            "json"=>[
                "id_reg"=>request("id_reg"),
                "keterangan"=>request("keterangan"),
                "qty"=>request("qty"),
                "harga"=>request("harga"),
            ]
        ]);
        if($response->getStatusCode()==200){
            return redirect("/api/biaya")->with("updated","biaya telah terupdate");
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
            $filteredBiaya = array_filter($biaya, function ($biaya) use ($id) {
                return $biaya['id_biaya'] == $id;
            });
            
        $singleBiaya = reset($filteredBiaya);
            return view("biaya.single", ["singleBiaya" => $singleBiaya, "id" => $id]);
        }
        else{
            null;
        }
    }
    public function deleteBiaya($id) {
        $myCookieValue = request()->cookie('__bpjph_ct');
        $RefreshToken = request()->cookie('__bpjph_rt');
        
        $client = new Client(['headers' => ['Cookie' => '__bpjph_ct='.$myCookieValue.';__bpjph_rt='.$RefreshToken]]);

        $response = $client->delete("http://dev-lph-api.halal.go.id/api/v1/costs/$id");
        if($response->getStatusCode() == 200){
            return redirect()->route("biaya.view")->with("success", "Data berhasil dihapus.");
        }
        else{
            null;
        }

    }
}
