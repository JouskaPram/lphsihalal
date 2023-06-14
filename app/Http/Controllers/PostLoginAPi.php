<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class PostLoginAPi extends Controller
{

    public function StoreLogin(Request $request){

       $client = new Client();
    $response = $client->post("http://dev-lph-api.halal.go.id/auth/signin", [
        "json" => [
            "userid" => request("userid"),
            "password" => request("password"),
        ],
        
    ]);

    if ($response->getStatusCode() == 200) {
        
        $result = json_decode($response->getBody(), true);
      $token = $result["payload"]['token'];
        
    session(['token' => $token]);
        return response()->json($result);
        
    } else {
        return response()->json($response); 
    }
    }


   public function logout()  {
    $client  = new Client();
    $response = $client->post("http://dev-lph-api.halal.go.id/auth/logout");
    if($response->getStatusCode() == 200){
        $result = json_decode($response->getBody(),true);
        return $result;
    }
   }
}
