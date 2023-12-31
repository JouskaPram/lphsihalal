<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SendtoLPHController extends Controller
{
    public function getsentolph() {
        $lph = env("LPH_MAPED");
        $myCookieValue = request()->cookie('__bpjph_ct');
        $RefreshToken = request()->cookie('__bpjph_rt');
        $url = env("LPH_URL");

        $response = Http::withHeaders([
            "Cookie" =>'__bpjph_ct='.$myCookieValue.';__bpjph_rt='.$RefreshToken,
        ])->get("$url/data_list/10030/$lph");
        if ($response->getStatusCode() == 200) {
            $data = json_decode($response->getBody(), true);
            $sendto = $data["payload"];
            $count= $data["payload"];
            $total = count($count);
            
            return view("proces.view",["sendto"=>$sendto,"total"=>$total]);
        } else {
            return null; 
        };
    }
    public function upStatus($id)  {
        // function untuk update status ke selesai proses di lph
        // name status periksa
    $myCookieValue = request()->cookie('__bpjph_ct');
    $RefreshToken = request()->cookie('__bpjph_rt');
    $url = env("LPH_URL");
    $client = new Client(['headers' => ['Cookie' => '__bpjph_ct='.$myCookieValue.';__bpjph_rt='.$RefreshToken]]);
    $response = $client->post("$url/data_list/updatestatus", [
         "json" => [
            "status" => "PERIKSA",
            "reg_id" =>  $id,
            "lph_mapped_id"=>env("LPH_MAPED"),
        ],
    ]);
    if($response->getStatusCode()==200){

        return redirect("/api/selesai");
    } 
    

    }
    public function downStatus($id) {
        // function untuk update status ke penetapan biaya
        // name status ajuan
    $myCookieValue = request()->cookie('__bpjph_ct');
    $RefreshToken = request()->cookie('__bpjph_rt');
    $url = env("LPH_URL");
    $client = new Client(['headers' => ['Cookie' => '__bpjph_ct='.$myCookieValue.';__bpjph_rt='.$RefreshToken]]);
    $response = $client->post("$url/data_list/updatestatus", [
         "json" => [
            "status" => "periksa",
            "reg_id" =>  $id,
            "lph_mapped_id"=>env("LPH_MAPED"),
        ],
    ]);
    if($response->getStatusCode()==200){
        return $response;      

        // return redirect("/api/datalist");
    } 
    }
}
