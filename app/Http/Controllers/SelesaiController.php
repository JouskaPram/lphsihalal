<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SelesaiController extends Controller
{
    public function getSelesai()  {
             $lph = env("LPH_MAPED");
        $myCookieValue = request()->cookie('__bpjph_ct');
        $RefreshToken = request()->cookie('__bpjph_rt');


        $response = Http::withHeaders([
            "Cookie" =>'__bpjph_ct='.$myCookieValue.';__bpjph_rt='.$RefreshToken,
        ])->get("http://dev-lph-api.halal.go.id/api/v1/data_list/10040/$lph");
        if ($response->getStatusCode() == 200) {
            $data = json_decode($response->getBody(), true);
            $selesai = $data["payload"];
            $count= $data["payload"];
            $total = count($count);
      
            return view("selesai.view",["selesai"=>$selesai,"total"=>$total]);
        } else {
            return null; 
        };
    }
    public function getKeterangan($id)  {
          $myCookieValue = request()->cookie('__bpjph_ct');
        $RefreshToken = request()->cookie('__bpjph_rt');
    
        $client = new Client(['headers' => ['Cookie' => '__bpjph_ct='.$myCookieValue.';__bpjph_rt='.$RefreshToken]]);

        $response = $client->get("http://dev-lph-api.halal.go.id/api/v1/audit_result?limit=22471&order_dir=desc");
        if($response->getStatusCode()==200){
            $data = json_decode($response->getBody(),true);

            $keterangan = $data["payload"];
            $filteredketerangan = array_filter($keterangan, function ($keterangan) use ($id) {
                return $keterangan['id_reg'] == $id;
            });
            
        $singleketerangan = reset($filteredketerangan);
            return $singleketerangan;
            // return view("jadwal.single", ["singlejadwal" => $singlejadwal, "id" => $id]);
        }
        else{
            null;
        }
    }
}
