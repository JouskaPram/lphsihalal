<?php

use App\Http\Controllers\AuditController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BiayaApiController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DataListApi;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\JadwalAuditController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\PostLoginAPi;
use App\Http\Controllers\SendtoLPHController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
// Auth route
Route::post("/login",[PostLoginAPi::class,'StoreLogin'])->name("login");
Route::get('/',[AuthController::class,"login"])->name("login.view");
Route::match(['get','post'],"/logout",[PostLoginAPi::class,'logout'])->name("auth.logout");


// data mohon route
Route::middleware('cookie')->group(function () {
    Route::controller(DataListApi::class)->group(function(){
        Route::get("/datalist","GetDataList");
        // detail data mohon
        Route::get("/reg/{reg}","getReg");
        Route::post("/reg/{reg}/status","updateStatus");
        Route::get("/reg/{reg}/factory","getFactory");
        Route::get("/reg/{reg}/product","getProduct");
        Route::get("/reg/{reg}/perusahaan","getPu");
        Route::get("/reg/{reg}/penyelia","getPenyelia");
        Route::get("/reg/{reg}/documents","getDocuments");
    });
});

// pembayaran route
Route::middleware("cookie")->group(function ()  {
   Route::controller(PembayaranController::class)->group(function(){ 
    Route::get("/pembayaran","getPembayaran");
    Route::get("/pembayaran/{id}","singlePembayaran");
    Route::get("/pembayaran/update/{id}/{b}","updateLayoutBiaya");
    Route::put("/pembayaran/update/{id}/{b}","updateBiaya");
    Route::post("/pembayaran/{id}/status","updateStatus");
    Route::get("/pembayaran/{id}/add","layoutPost");
    Route::post("/pembayaran/add","postPembayaran");
    Route::delete("/pembayaran/delete/{id}/{b}","deletePembayaran")->name("pembayaran.delete");
   });
});

Route::get("/dashboard",[DashboardController::class,"Dashboard"])->middleware("cookie");


// biaya route
Route::middleware('cookie')->group(function () {
    Route::controller(BiayaApiController::class)->group(function(){ 
        Route::get("/biaya","getBiaya")->name("biaya.view");
        Route::post("/biaya/add","postBiaya");
        Route::get("/biaya/tambah","postBiayaLayout")->name("biaya.post");
        Route::put("/biaya/put/{id}","updateBiaya")->name("biaya.update");
        Route::get("/biaya/{id}","singleBiaya");
        Route::delete("/biaya/{id}","deleteBIaya")->name("biaya.delete");
     });
});


// invoice Route
Route::middleware("cookie")->group(function(){
    Route::get("/invoice",[InvoiceController::class,"getInvoice"]);
});

// 
Route::middleware("cookie")->group(function(){
    Route::controller(SendtoLPHController::class)->group(function(){ 
        Route::get("/proces","getsentolph");
        Route::post("/proces/selesai/{id}","upStatus");
        Route::post("/proces/kembali/{id}","downStatus");
    });
});

Route::middleware("cookie")->group(function(){
    Route::controller(AuditController::class)->group(function(){
        
    });
});

Route::middleware("cookie")->group(function () {
    Route::controller(JadwalAuditController::class)->group(function (){
       Route::get("/jadwal","JadwalAuditior");
       Route::post("/jadwal/post","postJadwal");
       Route::get("/jadwal/{id}","singleLayout");
       Route::get("/jadwal/post/{id}","postJadwalLayout");
    //    Route::post("");
    });
});