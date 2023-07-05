<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class AuditController extends Controller
{
    public function getAuditior()  {
         $myCookieValue = request()->cookie('__bpjph_ct');
        $RefreshToken = request()->cookie('__bpjph_rt');
        $lph = "LPH E-ALMUMTAZAH";
        $url = env("LPH_URL");
        $client = new Client(['headers' => ['Cookie' => '__bpjph_ct='.$myCookieValue.';__bpjph_rt='.$RefreshToken]]);

        $response = $client->get("$url/reg_auditor?limit=4469");
        if($response->getStatusCode()==200){
            $data = json_decode($response->getBody(),true);
            $auditor = $data["payload"];
            $filterauditior = array_filter( $auditor,function ($auditor) use ($lph) {
                return $auditor["create_by"] == $lph;
            });

            return view("auditor.view",["filterauditior"=>$filterauditior]);
        }
        else{

        }
    } 
    public function postLayout()  {
        return view("auditor.post");
    }
    public function postAuditior()  {
        $myCookieValue = request()->cookie('__bpjph_ct');
        $RefreshToken = request()->cookie('__bpjph_rt');
        $url = env("LPH_URL");
        $client = new Client(['headers' => ['Cookie' => '__bpjph_ct='.$myCookieValue.';__bpjph_rt='.$RefreshToken]]);
        $response = $client->post("$url/reg_auditor", [
        "json" => [
            "id_reg" => request("reg"),
            "auditor_id" => env("LPH_MAPED"),
            "create_by" => "LPH E-ALMUMTAZAH",
        ],
        
    ]);
     
        if($response->getStatusCode()==200){
            Alert::success("Sukses","Audit Berhasil Di Tambahkan");
           return redirect()->back();
        }
    } 
    public function deleteAuditior($id)  {
         $myCookieValue = request()->cookie('__bpjph_ct');
        $RefreshToken = request()->cookie('__bpjph_rt');
        $url = env("LPH_URL");
        $client = new Client(['headers' => ['Cookie' => '__bpjph_ct='.$myCookieValue.';__bpjph_rt='.$RefreshToken]]);
        $response = $client->delete("$url/reg_auditor/$id");
     
        if($response->getStatusCode()==200){
        Alert::error("Sukses","Audit Berhasil Di Hapus");
           return redirect()->back();
        }
    }
}
