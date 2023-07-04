<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class AuditController extends Controller
{
    public function getAuditior()  {
         $myCookieValue = request()->cookie('__bpjph_ct');
        $RefreshToken = request()->cookie('__bpjph_rt');
    
        $client = new Client(['headers' => ['Cookie' => '__bpjph_ct='.$myCookieValue.';__bpjph_rt='.$RefreshToken]]);

        $response = $client->get("http://dev-lph-api.halal.go.id/api/v1/reg_auditor?limit=100");
        if($response->getStatusCode()==200){
            $data = json_decode($response->getBody(),true);
            $auditor = $data["payload"];
            
            return $auditor;
            // return view("auditor.view",["auditor"=>$auditor]);
        }
        else{

        }
    } 
    public function postAuditior()  {
        
    } 
    
}
