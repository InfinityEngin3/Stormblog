<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\DataController;

# Pages Controller
use App\Http\Controllers\Pages\BlogController;
use App\Http\Controllers\Pages\MembersController;

use Illuminate\Support\Facades\Route;

# Data controllers
Route::get('/js/file/{filename}', [DataController::class, 'files_js'])->where('filename', '.*');
Route::get('/css/file/{filename}', [DataController::class, 'files_css'])->where('filename', '.*');
Route::get('/image/file/{filename}', [DataController::class, 'files_images'])->where('filename', '.*');

# Default Controller
Route::get('/', [MainController::class, 'index']);

# Blog Controller
Route::get('/blog', [BlogController::class, 'blog_articles']);
Route::get('/blog/{type}/{slug}', [BlogController::class, 'blog_articles']);

# Member Controller
Route::post('/login', [MembersController::class, 'member_login']);
Route::get('/logout', [MembersController::class, 'member_logout']);