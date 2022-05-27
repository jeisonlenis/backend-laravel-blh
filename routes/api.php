<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get("/sellers", [\App\Http\Controllers\SellersController::class, 'index']);
Route::get("/clients", [\App\Http\Controllers\ClientsController::class, 'index']);
Route::get("/cars", [\App\Http\Controllers\CarsController::class, 'index']);
Route::get("/sells", [\App\Http\Controllers\SellsController::class, 'index']);

Route::post("/sellers", [\App\Http\Controllers\SellersController::class, 'store']);
Route::post("/clients", [\App\Http\Controllers\ClientsController::class, 'store']);
Route::post("/cars", [\App\Http\Controllers\CarsController::class, 'store']);
Route::post("/sells", [\App\Http\Controllers\SellsController::class, 'store']);