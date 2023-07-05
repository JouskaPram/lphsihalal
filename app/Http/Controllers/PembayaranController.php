<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use RealRashid\SweetAlert\Facades\Alert;

class PembayaranController extends Controller
{
    public function getPembayaran() {
        $lph = env("LPH_MAPED");
        $myCookieValue = request()->cookie('__bpjph_ct');
        $RefreshToken = request()->cookie('__bpjph_rt');
        $url = env("LPH_URL");

        $response = Http::withHeaders([
            "Cookie" =>'__bpjph_ct='.$myCookieValue.';__bpjph_rt='.$RefreshToken,
        ])->get("$url/data_list/10020/$lph");
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
        $url = env("LPH_URL");
        $client = new Client(['headers' => ['Cookie' => '__bpjph_ct='.$myCookieValue.';__bpjph_rt='.$RefreshToken]]);

        $response = $client->get("$url/costs?order_dir=desc");
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
    public function layoutPost($id)  {

   
        return view("pembayaran.post",["id"=>$id]);
   
}   
    public function postPembayaran() {
        $myCookieValue = request()->cookie('__bpjph_ct');
        $RefreshToken = request()->cookie('__bpjph_rt');
        $reg = request("reg");
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
            Alert::success("Sukses","Pembayaran Berhasil Di Tambahkan");
           return redirect("/api/pembayaran/$reg");
        }
    }
    public function updateStatus($id) {
        $myCookieValue = request()->cookie('__bpjph_ct');
        $RefreshToken = request()->cookie('__bpjph_rt');
        $url = env("LPH_URL");
        $client = new Client(['headers' => ['Cookie' => '__bpjph_ct='.$myCookieValue.';__bpjph_rt='.$RefreshToken]]);
        $response = $client->post("$url/data_list/updatestatus", [
            "json" => [
                "status" => "biaya",
                "reg_id" =>  $id,
                "lph_mapped_id"=>env("LPH_MAPED"),
            ],
        ]);
        if($response->getStatusCode()==200){
            // return $response;      
Alert::success("Sukses","Status Berhasil Di Ubah");
            return redirect("/api/pembayaran");
        } 
    }
    public function updateLayoutBiaya($id,$b) {
        $myCookieValue = request()->cookie('__bpjph_ct');
        $RefreshToken = request()->cookie('__bpjph_rt');
        $url = env("LPH_URL");
        $client = new Client(['headers' => ['Cookie' => '__bpjph_ct='.$myCookieValue.';__bpjph_rt='.$RefreshToken]]);

        $response = $client->get("$url/costs?order_dir=desc");
        if($response->getStatusCode()==200){
            $data = json_decode($response->getBody(),true);

            $biaya = $data["payload"];
            $filteredBiaya = array_filter($biaya, function ($biaya) use ($b) {
                return $biaya['id_biaya'] == $b;
            });
            
        $singleBiaya = reset($filteredBiaya);
      
            return view("pembayaran.single", ["singleBiaya" => $singleBiaya, "b" => $b,'id'=>$id]);
        }
        else{
            null;
        }
    }

    public function updateBiaya($id,$b) {
        $myCookieValue = request()->cookie('__bpjph_ct');
        $RefreshToken = request()->cookie('__bpjph_rt');
        $url = env("LPH_URL");
        $client = new Client(['headers' => ['Cookie' => '__bpjph_ct='.$myCookieValue.';__bpjph_rt='.$RefreshToken]]);

        $response = $client->put("$url/costs/$b",[
            "json"=>[
                "id_reg"=>$id,
                "keterangan"=>request("keterangan"),
                "qty"=>request("qty"),
                "harga"=>request("harga"),
            ]
        ]);
        if($response->getStatusCode()==200){
            Alert::info("Sukses","Pembayaran Berhasil Di Ubah");
             return redirect("/api/pembayaran/$id");
        }
    }
    public function deletePembayaran($id,$b)  {
       
        $myCookieValue = request()->cookie('__bpjph_ct');
        $RefreshToken = request()->cookie('__bpjph_rt');
        $url = env("LPH_URL");
        $client = new Client(['headers' => ['Cookie' => '__bpjph_ct='.$myCookieValue.';__bpjph_rt='.$RefreshToken]]);

        $response = $client->delete("$url/costs/$b");
        if($response->getStatusCode() == 200){
            Alert::error("Sukses","Pembayaran Berhasil Di hapus");
           return redirect("/api/pembayaran/$id");
        }
        else{
            null;
        }
    }
}
