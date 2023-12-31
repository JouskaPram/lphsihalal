<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Http;
use RealRashid\SweetAlert\Facades\Alert;

class DataListApi extends Controller
{
    public function GetDataList(Request $request)
    {
    $lph = env("LPH_MAPED");
    $url = env("LPH_URL");
    $myCookieValue = request()->cookie('__bpjph_ct');
    $RefreshToken = request()->cookie('__bpjph_rt');

    $response = Http::withHeaders([
        "Cookie" =>'__bpjph_ct='.$myCookieValue.';__bpjph_rt='.$RefreshToken,
    ])->get("$url/data_list/10010/$lph");
    $respenetapan = Http::withHeaders([
        "Cookie" =>'__bpjph_ct='.$myCookieValue.';__bpjph_rt='.$RefreshToken,
    ])->get("$url/data_list/10020/$lph");
    if ($response->getStatusCode() == 200) {
        $data = json_decode($response->getBody(), true);
        $penetapan = json_decode($respenetapan->getBody(),true);
        $penetapan = $penetapan["payload"];
        $datalist = $data["payload"];
        $count= $data["payload"];
        $total = count($count);
        return view("datalist.view",["datalist"=>$datalist,"total"=>$total,"penetapan"=>$penetapan]);
    } else {
        return null; 
    };

    
}
    public function getReg($reg) {
        // 
    $myCookieValue = request()->cookie('__bpjph_ct');
    $RefreshToken = request()->cookie('__bpjph_rt');
        $url = env("LPH_URL");
      $response = Http::withHeaders([
        "Cookie" =>'__bpjph_ct='.$myCookieValue.';__bpjph_rt='.$RefreshToken,
    ])->get("$url/reg/$reg");
    
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
    $url = env("LPH_URL");
    $client = new Client(['headers' => ['Cookie' => '__bpjph_ct='.$myCookieValue.';__bpjph_rt='.$RefreshToken]]);
    $response = $client->get("$url/reg/$reg");

    if ($response->getStatusCode() == 200) {
        $data = json_decode($response->getBody(), true);
        $factory =  $data["payload"]["factories"];
    
            $regis = $data["payload"];
             return view("datalist.reg.factory",["factory"=>$factory,"regis"=>$regis]);
        } else {
           null;
        }
    }
    public function getProduct($reg) {
    $myCookieValue = request()->cookie('__bpjph_ct');
    $RefreshToken = request()->cookie('__bpjph_rt');
    $url = env("LPH_URL");
    $client = new Client(['headers' => ['Cookie' => '__bpjph_ct='.$myCookieValue.';__bpjph_rt='.$RefreshToken]]);
    $response = $client->get("$url/reg/$reg");
    if ($response->getStatusCode() == 200) {
        $data = json_decode($response->getBody(), true);
        $product =  $data["payload"]["products"];
        $regis = $data["payload"];
        
         return view("datalist.reg.detail.product",["product"=>$product,"regis"=>$regis]);
        } else {
           null;
        }
    }
    public function getPu($reg) {
    $myCookieValue = request()->cookie('__bpjph_ct');
    $RefreshToken = request()->cookie('__bpjph_rt');
    $url = env("LPH_URL");
    $client = new Client(['headers' => ['Cookie' => '__bpjph_ct='.$myCookieValue.';__bpjph_rt='.$RefreshToken]]);
    $response = $client->get("$url/reg/$reg");
    if ($response->getStatusCode() == 200) {
        $data = json_decode($response->getBody(), true);
        $pu =  $data["payload"]["pu"];
        $regis =  $data["payload"];
        // return $pu
        return view("datalist.reg.detail.perusahaan",["pu"=>$pu,"regis"=>$regis]);
        } else {
           null;
        }
    }
    public function getPenyelia($reg) {
    $myCookieValue = request()->cookie('__bpjph_ct');
    $RefreshToken = request()->cookie('__bpjph_rt');
    $url = env("LPH_URL");
    $client = new Client(['headers' => ['Cookie' => '__bpjph_ct='.$myCookieValue.';__bpjph_rt='.$RefreshToken]]);
    $response = $client->get("$url/reg/$reg");
    if ($response->getStatusCode() == 200) {
        $data = json_decode($response->getBody(), true);
        $penyelia =  $data["payload"]["penyelia"];
        $regis =  $data["payload"];
        
             return view("datalist.reg.detail.penyelia",["penyelia"=>$penyelia,"regis"=>$regis]);
        } else {
           null;
        }
    }
    public function getDocuments($reg) {
    $myCookieValue = request()->cookie('__bpjph_ct');
    $RefreshToken = request()->cookie('__bpjph_rt');
    $url = env("LPH_URL");
    $client = new Client(['headers' => ['Cookie' => '__bpjph_ct='.$myCookieValue.';__bpjph_rt='.$RefreshToken]]);
    $response = $client->get("$url/reg/$reg");
    if ($response->getStatusCode() == 200) {
        $data = json_decode($response->getBody(), true);
        $doc =  $data["payload"]["documents"];
        $regis =  $data["payload"];
    
      
        return view("datalist.reg.detail.documents",["doc"=>$doc,"regis"=>$regis]);
        } else {
           null;
        }
    }

    public function updateStatus($reg)  {
    $myCookieValue = request()->cookie('__bpjph_ct');
    $RefreshToken = request()->cookie('__bpjph_rt');
    $url = env("LPH_URL");
    $client = new Client(['headers' => ['Cookie' => '__bpjph_ct='.$myCookieValue.';__bpjph_rt='.$RefreshToken]]);
    $response = $client->post("$url/data_list/updatestatus", [
         "json" => [
            "status" => "ajuan",
            "reg_id" =>  $reg,
            "lph_mapped_id"=>env("LPH_MAPED"),
        ],
    ]);
    if($response->getStatusCode()==200){
        // return $response;      
        Alert::success("Sukses","Berhasil Mengubah Status");
         return redirect()->back();
    } 
    }
    
}


