<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'homepage'])->name('homepage');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [PageController::class, 'dashboard'])->name('dashboard');
});

Route::resource('posts', PostController::class);