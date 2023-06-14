<?php

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
Route::post("/logout",[PostLoginAPi::class,'logout']);
Route::get("/datalist",[DataListApi::class,"GetDataList"]);

// Route::get("/provisi",)