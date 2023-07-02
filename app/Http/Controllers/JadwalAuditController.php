<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class JadwalAuditController extends Controller
{
    public function JadwalAuditior()  {
        $myCookieValue = request()->cookie('__bpjph_ct');
        $RefreshToken = request()->cookie('__bpjph_rt');
    
        $client = new Client(['headers' => ['Cookie' => '__bpjph_ct='.$myCookieValue.';__bpjph_rt='.$RefreshToken]]);

        $response = $client->get("http://dev-lph-api.halal.go.id/api/v1/audit_schedule?order_dir=asc&limit=10");
        if($response->getStatusCode()==200){
            $data = json_decode($response->getBody(),true);
            $jadwal = $data["payload"];
            
            
            return view("jadwal.view",["jadwal"=>$jadwal]);
        }
        else{
            null;
        }
    }

    public function singleLayout($id)  {
        $myCookieValue = request()->cookie('__bpjph_ct');
        $RefreshToken = request()->cookie('__bpjph_rt');
    
        $client = new Client(['headers' => ['Cookie' => '__bpjph_ct='.$myCookieValue.';__bpjph_rt='.$RefreshToken]]);

        $response = $client->get("http://dev-lph-api.halal.go.id/api/v1/audit_schedule?order_dir=desc");
        if($response->getStatusCode()==200){
            $data = json_decode($response->getBody(),true);

            $jadwal = $data["payload"];
            $filteredjadwal = array_filter($jadwal, function ($jadwal) use ($id) {
                return $jadwal['id_reg'] == $id;
            });
            
        $singlejadwal = $filteredjadwal;
            // return $singlejadwal;
            return view("jadwal.single", ["singlejadwal" => $singlejadwal, "id" => $id]);
        }
        else{
            null;
        }
    }
    public function postJadwalLayout($id)  {
       
            return view("jadwal.post",["id"=>$id]);
        
    }

    public function postJadwal()  {
        $myCookieValue = request()->cookie('__bpjph_ct');
        $RefreshToken = request()->cookie('__bpjph_rt');
        $reg = request("req");
        $dari = strtotime(request("dari"));
$sampai = strtotime(request("sampai")); 

$jml_hari = ($sampai - $dari) / (60 * 60 * 24);
        $client = new Client(['headers' => ['Cookie' => '__bpjph_ct='.$myCookieValue.';__bpjph_rt='.$RefreshToken]]);
        $response = $client->post("http://dev-lph-api.halal.go.id/api/v1/audit_schedule", [
        "json" => [
            "id_reg" => request("reg"),
            "jadwal_awal" => request("dari"),
            "jadwal_akhir" => request("sampai"),
            "jml_hari" => $jml_hari,
        ],
        
    ]);
     
        if($response->getStatusCode()==200){
           
        return redirect()->back();
    }}
}
