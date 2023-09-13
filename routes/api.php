<?php

use App\Http\Controllers\Api\EmailController;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\RegisterController;
use App\Http\Controllers\Api\ThirdPartyController;
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


Route::controller(RegisterController::class)->group(function(){
    Route::post('register', 'register');
    Route::post('login', 'login');
});

Route::resource('/products',ProductController::class)->middleware(['auth:sanctum']);




Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/export-excel',[ProductController::class,'export']);
Route::post('/import-excel',[ProductController::class,'import']);

Route::get('/get-api',[ThirdPartyController::class,'index']);



Route::get('/send-email',[EmailController::class,'send'])->middleware('auth:sanctum');


