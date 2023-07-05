<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Flash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;

class JadwalAuditController extends Controller
{
    public function JadwalAuditior()  {
        $myCookieValue = request()->cookie('__bpjph_ct');
        $RefreshToken = request()->cookie('__bpjph_rt');
        $lph = env("LPH_MAPED");
        $url = env("LPH_URL");
        // $client = new Client(['headers' => ['Cookie' => '__bpjph_ct='.$myCookieValue.';__bpjph_rt='.$RefreshToken]]);
        $client = new Client(['headers' => ['Cookie' => '__bpjph_ct='.$myCookieValue.';__bpjph_rt='.$RefreshToken]]);
        $reg = $client->get("$url/data_list/10030/$lph");
      
        $response = $client->get("$url/audit_schedule?order_dir=asc&limit=4042");
      
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
        $url = env("LPH_URL");
        $client = new Client(['headers' => ['Cookie' => '__bpjph_ct='.$myCookieValue.';__bpjph_rt='.$RefreshToken]]);

        $response = $client->get("$url/audit_schedule?order_dir=desc");
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
    
        $url = env("LPH_URL");
        $dari = strtotime(request("dari"));
$sampai = strtotime(request("sampai")); 

$jml_hari = ($sampai - $dari) / (60 * 60 * 24);
        $client = new Client(['headers' => ['Cookie' => '__bpjph_ct='.$myCookieValue.';__bpjph_rt='.$RefreshToken]]);
        $response = $client->post("$url/audit_schedule", [
        "json" => [
            "id_reg" => request("reg"),
            "jadwal_awal" => request("dari"),
            "jadwal_akhir" => request("sampai"),
            "jml_hari" => $jml_hari,
        ],
        
    ]);

        if($response->getStatusCode()==200){
          Alert::success('Success', 'Data Berhasil Di Tambahkan');
        return redirect()->back();
    }

}

    public function deleteJadwal($id)  {
            $myCookieValue = request()->cookie('__bpjph_ct');
        $RefreshToken = request()->cookie('__bpjph_rt');
        $url = env("LPH_URL");
        
        $client = new Client(['headers' => ['Cookie' => '__bpjph_ct='.$myCookieValue.';__bpjph_rt='.$RefreshToken]]);

        $response = $client->delete("$url/audit_schedule/$id");
       
        if($response->getStatusCode() == 200){
            Alert::error("Sukses","Data Berhasil Di Hapus");
            return redirect()->back();
        }
        else{
            null;
        }
      
    }
    public function updateStatus($id)  {
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
            Alert::error("Sukses","Status Berhasil di Update");
            return redirect("/api/pembayaran/$id");
    } 
    }
    public function updateLayout($id,$up)  {
        $myCookieValue = request()->cookie('__bpjph_ct');
        $RefreshToken = request()->cookie('__bpjph_rt');
        $url = env("LPH_URL");
        $client = new Client
        (['headers' => ['Cookie' => '__bpjph_ct='.$myCookieValue.';__bpjph_rt='.$RefreshToken]]);

        $response = $client->get("$url/audit_schedule?order_dir=desc");
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
        $url = env("LPH_URL");
        $dari = strtotime(request("dari"));
$sampai = strtotime(request("sampai")); 

$jml_hari = ($sampai - $dari) / (60 * 60 * 24);
        $client = new Client(['headers' => ['Cookie' => '__bpjph_ct='.$myCookieValue.';__bpjph_rt='.$RefreshToken]]);
        $response = $client->put("$url/audit_schedule/$up", [
        "json" => [
            "id_reg" => $id,
            "jadwal_awal" => request("dari"),
            "jadwal_akhir" => request("sampai"),
            "jml_hari" => $jml_hari,
        ],
        
    ]);
     
        if($response->getStatusCode()==200){
        Alert::info("Sukses","Jadwal Berhasil di Update");
        return redirect()->back();
    }}
    
}
