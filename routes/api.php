<?php

use App\Http\Controllers\BiayaApiController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DataListApi;
use App\Http\Controllers\PostLoginAPi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post("/login",[PostLoginAPi::class,'StoreLogin'])->name("login");
// Route::get("/datalist",[DataListApi::class,"GetDataList"]);

Route::post("/logout",[PostLoginAPi::class,'logout'])->name("logout");
Route::get("/datalist",[DataListApi::class,"GetDataList"]);

// detail
Route::get("/reg/{reg}",[DataListApi::class,"getReg"]);
Route::post("/reg/{reg}/status",[DataListApi::class,"updateStatus"]);
Route::get("/reg/{reg}/factory",[DataListApi::class,"getFactory"]);
Route::get("/reg/{reg}/product",[DataListApi::class,"getProduct"]);
Route::get("/reg/{reg}/perusahaan",[DataListApi::class,"getPu"]);
Route::get("/reg/{reg}/penyelia",[DataListApi::class,"getPenyelia"]);
Route::get("/reg/{reg}/documents",[DataListApi::class,"getDocuments"]);

Route::get("/dashboard",[DashboardController::class,"Dashboard"]);

Route::get("/biaya",[BiayaApiController::class,"getBiaya"]);
Route::post("/biaya/add",[BiayaApiController::class,"postBiaya"]);
Route::put("/biaya/put/{id}",[BiayaApiController::class,"updateBiaya"])->name("biaya.update");
Route::get("/biaya/{id}",[BiayaApiController::class,"singleBiaya"]);