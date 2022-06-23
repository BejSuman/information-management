<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;




Route::get('/',[HomeController::class,'index']);
Route::get('/contact',[ContactController::class,'index']);
