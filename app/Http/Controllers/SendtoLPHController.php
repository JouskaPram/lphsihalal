<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SendtoLPHController extends Controller
{
    public function getsentolph() {
    $lph = env("LPH_MAPED");
    $myCookieValue = request()->cookie('__bpjph_ct');
    $RefreshToken = request()->cookie('__bpjph_rt');


    $response = Http::withHeaders([
        "Cookie" =>'__bpjph_ct='.$myCookieValue.';__bpjph_rt='.$RefreshToken,
    ])->get("http://dev-lph-api.halal.go.id/api/v1/data_list/10030/$lph");
    if ($response->getStatusCode() == 200) {
        $data = json_decode($response->getBody(), true);
        $sendto = $data["payload"];
        $count= $data["payload"];
        $total = count($count);
        return $sendto;
        // return view("pembayaran.view",["pembayaran"=>$pembayaran,"total"=>$total]);
    } else {
        return null; 
    };
    }
}
