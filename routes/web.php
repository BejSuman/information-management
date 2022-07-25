<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\AccountController;





Route::get('/',[HomeController::class,'index']);
Route::get('/contact',[ContactController::class,'index']);
Route::get('/about',[AboutController::class,'index']);
Route::get('/courses',[CourseController::class,'index']);
Route::get('/account',[AccountController::class,'index']);

