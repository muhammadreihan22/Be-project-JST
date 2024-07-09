<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MobilController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*Route::post("/login", [AuthController::class, 'login']);*/

Route::get("/mobil", [MobilController::class, 'index']);

/*this is show id mobil or car*/
Route::get("/mobil/{id}", [MobilController::class, 'show']);

