<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class AuditController extends Controller
{
    public function getAuditior()  {
         $myCookieValue = request()->cookie('__bpjph_ct');
        $RefreshToken = request()->cookie('__bpjph_rt');
        $lph = "LPH E-ALMUMTAZAH";
        $client = new Client(['headers' => ['Cookie' => '__bpjph_ct='.$myCookieValue.';__bpjph_rt='.$RefreshToken]]);

        $response = $client->get("http://dev-lph-api.halal.go.id/api/v1/reg_auditor?limit=4469");
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

        $client = new Client(['headers' => ['Cookie' => '__bpjph_ct='.$myCookieValue.';__bpjph_rt='.$RefreshToken]]);
        $response = $client->post("http://dev-lph-api.halal.go.id/api/v1/reg_auditor", [
        "json" => [
            "id_reg" => request("reg"),
            "auditor_id" => env("LPH_MAPED"),
            "create_by" => "LPH E-ALMUMTAZAH",
        ],
        
    ]);
     
        if($response->getStatusCode()==200){
        
           return redirect()->back();
        }
    } 
    public function deleteAuditior($id)  {
         $myCookieValue = request()->cookie('__bpjph_ct');
        $RefreshToken = request()->cookie('__bpjph_rt');

        $client = new Client(['headers' => ['Cookie' => '__bpjph_ct='.$myCookieValue.';__bpjph_rt='.$RefreshToken]]);
        $response = $client->delete("http://dev-lph-api.halal.go.id/api/v1/reg_auditor/$id");
     
        if($response->getStatusCode()==200){
        
           return redirect()->back();
        }
    }
}
