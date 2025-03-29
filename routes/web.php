<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\DataController;

use Illuminate\Support\Facades\Route;

# Data controllers
Route::get('/js/file/{filename}', [DataController::class, 'files_js'])->where('filename', '.*');
Route::get('/css/file/{filename}', [DataController::class, 'files_css'])->where('filename', '.*');
Route::get('/image/file/{filename}', [DataController::class, 'files_images'])->where('filename', '.*');

# Default Controller
Route::get('/', [MainController::class, 'index']);