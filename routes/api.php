<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\ProductoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});





Route::post('v1/register', [AuthController::class,'register']);

Route::post('v1/login', [AuthController::class,'login']);




Route::middleware(['auth:sanctum'])->group( function (){



    Route::resource('v1/productos', ProductoController::class);

    Route::get('v1/logout', [AuthController::class,'logout']);

});




