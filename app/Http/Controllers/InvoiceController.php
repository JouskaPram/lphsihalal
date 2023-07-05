<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function getInvoice()  {
        $myCookieValue = request()->cookie('__bpjph_ct');
        $RefreshToken = request()->cookie('__bpjph_rt');
        $lph = env("LPH_MAPED");
        $url = env("LPH_URL");
        $client = new Client(['headers' => ['Cookie' => '__bpjph_ct='.$myCookieValue.';__bpjph_rt='.$RefreshToken]]);

        $response = $client->get("$url/invoice/$lph");
        if($response->getStatusCode()==200){
            $data = json_decode($response->getBody(),true);
            $invoice = $data["payload"];
            return $invoice;

        
        }
        else{

        }
    }
}
