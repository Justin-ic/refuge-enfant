<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use Laravel\Sanctum\HasApiTokens; // Importation du trait

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/getPayement', [AuthController::class,'getPayement'])->name('getPayement'); 