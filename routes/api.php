<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StationController;

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

Route::post('stations/store',[StationController::class,'store']);
Route::put('stations/{id}/update',[StationController::class,'update']);
Route::delete('stations/{id}/delete',[StationController::class,'delete']);
Route::get('stations/city/{id}',[StationController::class,'getStationsByCity']);
Route::get('stations/opened/city/{id}',[StationController::class,'getOpenedStationByCity']);
Route::get('stations/closest/',[StationController::class,'getClosestStation']);
