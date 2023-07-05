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
        $lph = env("LPH_MAPED");
        $url = env("LPH_URL");
        // $client = new Client(['headers' => ['Cookie' => '__bpjph_ct='.$myCookieValue.';__bpjph_rt='.$RefreshToken]]);
        $client = new Client(['headers' => ['Cookie' => '__bpjph_ct='.$myCookieValue.';__bpjph_rt='.$RefreshToken]]);
        $reg = $client->get("$url/data_list/10020/$lph");
      
        $response = $client->get("$url/costs?order_dir=desc&limit=3149");
      
        if($response->getStatusCode()==200){
            $data = json_decode($response->getBody(),true);
            $reg = json_decode($reg->getBody(),true);
            $id = $reg["payload"];
            
            $biaya = $data["payload"];
            
          $filter = array_filter($biaya, function ($biaya) use ($id) {
    $filteredIds = array_column($id, 'id_reg');
    return in_array($biaya['id_reg'], $filteredIds);
});
        
            return view("biaya.view",["filter"=>$filter]);
        }
        else{
            null;
        }
    }
    public function postBiayaLayout() {
    $myCookieValue = request()->cookie('__bpjph_ct');
    $RefreshToken = request()->cookie('__bpjph_rt');
    $lph = env("LPH_MAPED");
    $url = env("LPH_URL");
    $client = new Client(['headers' => ['Cookie' => '__bpjph_ct='.$myCookieValue.';__bpjph_rt='.$RefreshToken]]);
    $response = $client->get("$url/data_list/10020/$lph", [

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
        $url = env("LPH_URL");
    
        $client = new Client(['headers' => ['Cookie' => '__bpjph_ct='.$myCookieValue.';__bpjph_rt='.$RefreshToken]]);
        $response = $client->post("$url/costs", [
        "json" => [
            "id_reg" => request("reg"),
            "keterangan" => request("keterangan"),
            "qty" => request("qty"),
            "harga" => request("harga"),
        ],
        
    ]);
     
        if($response->getStatusCode()==200){
                    $message = 'Biaya berhasil dihapus.';
        $type = 'success';
               
       
        }
        session()->flash('post', [
        'title' => 'Title',
        'message' => $message,
        'type' => $type
    ]);
        return redirect("api/biaya");
    }


    public function updateBiaya($id)  {
        $myCookieValue = request()->cookie('__bpjph_ct');
        $RefreshToken = request()->cookie('__bpjph_rt');
        $url = env("LPH_URL");
        
        $client = new Client(['headers' => ['Cookie' => '__bpjph_ct='.$myCookieValue.';__bpjph_rt='.$RefreshToken]]);

        $response = $client->put("$url/costs/$id",[
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
        $url = env("LPH_URL");
        $client = new Client(['headers' => ['Cookie' => '__bpjph_ct='.$myCookieValue.';__bpjph_rt='.$RefreshToken]]);

        $response = $client->get("$url/costs?order_dir=desc");
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
        $url = env("LPH_URL");
        $client = new Client(['headers' => ['Cookie' => '__bpjph_ct='.$myCookieValue.';__bpjph_rt='.$RefreshToken]]);

        $response = $client->delete("$url/costs/$id");
         Alert::alert('Title', 'Message', 'Type');
        if($response->getStatusCode() == 200){
    
        }
        else{
            null;
        }
        return redirect()->route("biaya.view");
        Alert::alert('Title', 'Message', 'Type');
    }
    
}
