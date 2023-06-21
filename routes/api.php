<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BiayaApiController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DataListApi;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\PostLoginAPi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post("/login",[PostLoginAPi::class,'StoreLogin'])->name("login");
// Route::get("/datalist",[DataListApi::class,"GetDataList"]);
Route::get('/',[AuthController::class,"login"])->name("login.view");
Route::match(['get','post'],"/logout",[PostLoginAPi::class,'logout'])->name("auth.logout");


// data mohon route
Route::middleware('cookie')->group(function () {
    Route::get("/datalist",[DataListApi::class,"GetDataList"]);
    // detail data mohon
    Route::get("/reg/{reg}",[DataListApi::class,"getReg"]);
    Route::post("/reg/{reg}/status",[DataListApi::class,"updateStatus"]);
    Route::get("/reg/{reg}/factory",[DataListApi::class,"getFactory"]);
    Route::get("/reg/{reg}/product",[DataListApi::class,"getProduct"]);
    Route::get("/reg/{reg}/perusahaan",[DataListApi::class,"getPu"]);
    Route::get("/reg/{reg}/penyelia",[DataListApi::class,"getPenyelia"]);
    Route::get("/reg/{reg}/documents",[DataListApi::class,"getDocuments"]);
});

Route::middleware("cookie")->group(function ()  {
   Route::get("/pembayaran",[PembayaranController::class,"getPembayaran"]);
   Route::get("/pembayaran/{id}",[PembayaranController::class,"singlePembayaran"]);
   Route::post("/pembayaran/{id}/status",[PembayaranController::class,"updateStatus"]);
   Route::get("/pembayaran/{id}/add",[PembayaranController::class,"layoutPost"]);
   Route::post("/pembayaran/add",[PembayaranController::class,"postPembayaran"]);
});

Route::get("/dashboard",[DashboardController::class,"Dashboard"])->middleware("cookie");


// biaya route
Route::middleware('cookie')->group(function () {
    Route::get("/biaya",[BiayaApiController::class,"getBiaya"])->name("biaya.view");
    Route::post("/biaya/add",[BiayaApiController::class,"postBiaya"]);
    Route::get("/biaya/tambah",[BiayaApiController::class,"postBiayaLayout"])->name("biaya.post");
    Route::put("/biaya/put/{id}",[BiayaApiController::class,"updateBiaya"])->name("biaya.update");
    Route::get("/biaya/{id}",[BiayaApiController::class,"singleBiaya"]);
    Route::delete("/biaya/{id}",[BiayaApiController::class,"deleteBIaya"])->name("biaya.delete");
});


// invoice Route
Route::middleware("cookie")->group(function(){
    Route::get("/invoice",[InvoiceController::class,"getInvoice"]);
});