<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\aboutController;




Route::get('/',[HomeController::class,'index']);
Route::get('/contact',[ContactController::class,'index']);
Route::get('/about',[aboutController::class,'index']);
