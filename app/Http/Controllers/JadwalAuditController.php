<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class JadwalAuditController extends Controller
{
    public function JadwalAuditior()  {
        $myCookieValue = request()->cookie('__bpjph_ct');
        $RefreshToken = request()->cookie('__bpjph_rt');
        $lph = env("LPH_MAPED");
        // $client = new Client(['headers' => ['Cookie' => '__bpjph_ct='.$myCookieValue.';__bpjph_rt='.$RefreshToken]]);
        $client = new Client(['headers' => ['Cookie' => '__bpjph_ct='.$myCookieValue.';__bpjph_rt='.$RefreshToken]]);
        $reg = $client->get("http://dev-lph-api.halal.go.id/api/v1/data_list/10030/$lph");
      
        $response = $client->get("http://dev-lph-api.halal.go.id/api/v1/audit_schedule?order_dir=asc&limit=4042");
      
        if($response->getStatusCode()==200){
            $data = json_decode($response->getBody(),true);
            $reg = json_decode($reg->getBody(),true);
            $id = $reg["payload"];
            
            $jadwal = $data["payload"];
            $filter = array_filter($jadwal,function ($jadwal) use($id){
                foreach ($id as $key) {
                    return $jadwal["id_reg"] == $key["id_reg"];       
                }
            });
       
                        
            
            return view("jadwal.view",["filter"=>$filter]);
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
          alert()->success('SuccessAlert','Lorem ipsum dolor sit amet.'); 
        return redirect()->back()->withSuccess("berhasil di tambahkan");
    }}

    public function deleteJadwal($id)  {
            $myCookieValue = request()->cookie('__bpjph_ct');
        $RefreshToken = request()->cookie('__bpjph_rt');
        
        $client = new Client(['headers' => ['Cookie' => '__bpjph_ct='.$myCookieValue.';__bpjph_rt='.$RefreshToken]]);

        $response = $client->delete("http://dev-lph-api.halal.go.id/api/v1/audit_schedule/$id");
       
        if($response->getStatusCode() == 200){
            Alert::warning('Warning Title', 'Jadwal Berhasil Di Hapus');
            return redirect()->back()->with("delete","data berhasil di hapus");
        }
        else{
            null;
        }
      
    }
    public function updateStatus($id)  {
               $myCookieValue = request()->cookie('__bpjph_ct');
    $RefreshToken = request()->cookie('__bpjph_rt');
    
    $client = new Client(['headers' => ['Cookie' => '__bpjph_ct='.$myCookieValue.';__bpjph_rt='.$RefreshToken]]);
    $response = $client->post("http://dev-lph-api.halal.go.id/api/v1/data_list/updatestatus", [
         "json" => [
            "status" => "biaya",
            "reg_id" =>  $id,
            "lph_mapped_id"=>env("LPH_MAPED"),
        ],
    ]);
    if($response->getStatusCode()==200){
        // return $response;      

        return redirect("/api/pembayaran");
    } 
    }
    public function updateLayout($id,$up)  {
        $myCookieValue = request()->cookie('__bpjph_ct');
        $RefreshToken = request()->cookie('__bpjph_rt');
    
        $client = new Client
        (['headers' => ['Cookie' => '__bpjph_ct='.$myCookieValue.';__bpjph_rt='.$RefreshToken]]);

        $response = $client->get("http://dev-lph-api.halal.go.id/api/v1/audit_schedule?order_dir=desc");
        if($response->getStatusCode()==200){
            $data = json_decode($response->getBody(),true);

            $jadwal = $data["payload"];
            $filteredjadwal = array_filter($jadwal, function ($jadwal) use ($id) {
                return $jadwal['id_reg'] == $id;
            });
            $filteredid = array_filter($filteredjadwal,function ($filteredjadwal) use ($up){
                return $filteredjadwal["id_audit"] == $up;
            });
            
        $singlejadwal = reset($filteredid);
            // return $singlejadwal;
            return view("jadwal.update", ["singlejadwal" => $singlejadwal, "id" => $id,"up"=>$up]);
        }
        else{
            null;
        }
    }

    public function updateJadwal($id,$up)  {
          $myCookieValue = request()->cookie('__bpjph_ct');
        $RefreshToken = request()->cookie('__bpjph_rt');
        $reg = request("req");
        $dari = strtotime(request("dari"));
$sampai = strtotime(request("sampai")); 

$jml_hari = ($sampai - $dari) / (60 * 60 * 24);
        $client = new Client(['headers' => ['Cookie' => '__bpjph_ct='.$myCookieValue.';__bpjph_rt='.$RefreshToken]]);
        $response = $client->put("http://dev-lph-api.halal.go.id/api/v1/audit_schedule/$up", [
        "json" => [
            "id_reg" => $id,
            "jadwal_awal" => request("dari"),
            "jadwal_akhir" => request("sampai"),
            "jml_hari" => $jml_hari,
        ],
        
    ]);
     
        if($response->getStatusCode()==200){
          
        return redirect('/api/jadwal');
    }}
    
}
