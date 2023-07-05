<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Http;
use RealRashid\SweetAlert\Facades\Alert;
use RealRashid\SweetAlert\Storage\AlertSessionStore;

class PostLoginAPi extends Controller
{

    public function StoreLogin(Request $request)
{
    $response = Http::asForm()->post("http://dev-lph-api.halal.go.id/auth/signin", [
            "userid" => request("userid"),
            "password" => request("password"),
    ]);

    if ($response->getStatusCode() == 200) {
        $result = json_decode($response->getBody(), true);

        return redirect("/api/dashboard")
            ->withCookie("__bpjph_ct", $result["payload"]["token"], 20*20*20)
            ->withCookie("__bpjph_rt", $result["payload"]["refreshToken"], 20*20*20);
    } else {
       
        return redirect("/api")->with("wrong","Email/Sandi Yang Anda Masukan Salah");
      
    }
}



   public function logout()  {
    $client  = new Client();
    $response = $client->post("http://dev-lph-api.halal.go.id/auth/logout");
    if($response->getStatusCode() == 200){
    
        // $results = json_decode($response->getBody(),true);
   
        return redirect("/")->withCookie("__bpjph_ct","",0)->withCookie("__bpjph_rt","",0);
    }
   }
}
