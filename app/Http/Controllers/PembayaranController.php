<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PembayaranController extends Controller
{
    public function getPembayaran() {
         $lph = env("LPH_MAPED");
    $myCookieValue = request()->cookie('__bpjph_ct');
    $RefreshToken = request()->cookie('__bpjph_rt');


    $response = Http::withHeaders([
        "Cookie" =>'__bpjph_ct='.$myCookieValue.';__bpjph_rt='.$RefreshToken,
    ])->get("http://dev-lph-api.halal.go.id/api/v1/data_list/10020/$lph");
    if ($response->getStatusCode() == 200) {
        $data = json_decode($response->getBody(), true);
        $pembayaran = $data["payload"];
        $count= $data["payload"];
        $total = count($count);
        // return $pembayaran;
        return view("pembayaran.view",["pembayaran"=>$pembayaran,"total"=>$total]);
    } else {
        return null; 
    };
    }
    public function singlePembayaran($id)  {
        $myCookieValue = request()->cookie('__bpjph_ct');
        $RefreshToken = request()->cookie('__bpjph_rt');
    
        $client = new Client(['headers' => ['Cookie' => '__bpjph_ct='.$myCookieValue.';__bpjph_rt='.$RefreshToken]]);

        $response = $client->get("http://dev-lph-api.halal.go.id/api/v1/costs?order_dir=desc");
        if($response->getStatusCode()==200){
            $data = json_decode($response->getBody(),true);

            $biaya = $data["payload"];
            $filteredBiaya = array_filter($biaya, function ($biaya) use ($id) {
                return $biaya['id_reg'] == $id;
            });
            
            // return $filteredBiaya;
            return view("pembayaran.detail", ["filteredBiaya" => $filteredBiaya, "id" => $id]);
        }
        else{
            null;
        } 
    }
}
