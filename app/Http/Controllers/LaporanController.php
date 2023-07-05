<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use RealRashid\SweetAlert\Facades\Alert;

class LaporanController extends Controller
{
    public function getLaporan()  {
        $myCookieValue = request()->cookie('__bpjph_ct');
        $RefreshToken = request()->cookie('__bpjph_rt');
        $lph = env("LPH_MAPED");
        $url = env("LPH_URL");
        // $client = new Client(['headers' => ['Cookie' => '__bpjph_ct='.$myCookieValue.';__bpjph_rt='.$RefreshToken]]);
        $client = new Client(['headers' => ['Cookie' => '__bpjph_ct='.$myCookieValue.';__bpjph_rt='.$RefreshToken]]);
        $reg = $client->get("$url/data_list/10040/$lph");
      
        $response = $client->get("$url/audit_result?order_dir=desc&limit=22471");
      
        if($response->getStatusCode()==200){
            $data = json_decode($response->getBody(),true);
            $reg = json_decode($reg->getBody(),true);
            $id = $reg["payload"];
            
            $laporan = $data["payload"];
            $filter = array_filter($laporan,function ($laporan) use($id){
                foreach ($id as $key) {
                    return $laporan["id_reg"] == $key["id_reg"];       
                }
            });
                    
            return view("laporan.page",["filter"=>$filter]);
        }
        else{
            null;
        }
    }

    public function postLayout($id)  {
    $lph = env("LPH_MAPED");
    $url = env("LPH_URL");
    $myCookieValue = request()->cookie('__bpjph_ct');
    $RefreshToken = request()->cookie('__bpjph_rt');


    $response = Http::withHeaders([
        "Cookie" =>'__bpjph_ct='.$myCookieValue.';__bpjph_rt='.$RefreshToken,
    ])->get("$url/data_list/10030/$lph");
    if ($response->getStatusCode() == 200) {
        $data = json_decode($response->getBody(), true);
        $laporan = $data["payload"];
    
        return view("laporan.view",["laporan"=>$laporan,"id"=>$id]);
    } else {
        return null; 
    };
    }
    public function postLaporan()
    {
        set_time_limit(120);
        
        $myCookieValue = request()->cookie('__bpjph_ct');
        $RefreshToken = request()->cookie('__bpjph_rt');
        $url = env("LPH_URl");
        $file = request()->file('file');

        $response = Http::withHeaders([
            'Cookie' => '__bpjph_ct='.$myCookieValue.';__bpjph_rt='.$RefreshToken,
        ])->attach('file', file_get_contents($file->getRealPath()), $file->getClientOriginalName())
            ->post("$url/audit_result", [
                "id_reg" => request("reg"),
                "keterangan" => request("keterangan"),
                "tgl_selesai" => date("Y-m-d"),
                "hasil_audit" => "PR001"
            ]);

        if ($response->status() == 200) {
            Alert::success("Sukses","Laporan Berhasil Di Tambahkan");
            return redirect()->back();
        } else {
            return null;
        }
    }
}
