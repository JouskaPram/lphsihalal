<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class LaporanController extends Controller
{
    public function postLayout()  {
    $lph = env("LPH_MAPED");
    $myCookieValue = request()->cookie('__bpjph_ct');
    $RefreshToken = request()->cookie('__bpjph_rt');


    $response = Http::withHeaders([
        "Cookie" =>'__bpjph_ct='.$myCookieValue.';__bpjph_rt='.$RefreshToken,
    ])->get("http://dev-lph-api.halal.go.id/api/v1/data_list/10030/$lph");
    if ($response->getStatusCode() == 200) {
        $data = json_decode($response->getBody(), true);
        $laporan = $data["payload"];
    
        return view("laporan.view",["laporan"=>$laporan]);
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
            return $response;
        } else {
            return null;
        }
    }
}
