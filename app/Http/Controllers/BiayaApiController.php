<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use RealRashid\SweetAlert\Facades\Alert;

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
    $lph = env("LPH_MAPED");
    $client = new Client(['headers' => ['Cookie' => '__bpjph_ct='.$myCookieValue.';__bpjph_rt='.$RefreshToken]]);
    $response = $client->get("http://dev-lph-api.halal.go.id/api/v1/data_list/10010/$lph", [

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
             Session::flash('success', 'Biaya deleted successfully');
           return redirect("api/biaya")->with('roso', 'Post created successfully');
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
         Session::flash('success', 'Biaya deleted successfully');
        }
        else{
            null;
        }
    return redirect()->route('biaya.view')->with('roso', 'Post created successfully');
    }
    
}
