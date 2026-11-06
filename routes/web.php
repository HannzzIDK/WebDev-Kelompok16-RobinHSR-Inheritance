<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\aboutController;
use App\Http\Controllers\blogController;

Route::get('/', [homeController::class, 'index']);
Route::get('/about', [aboutController::class, 'index']);
Route::get('/blog', [blogController::class, 'index']);
