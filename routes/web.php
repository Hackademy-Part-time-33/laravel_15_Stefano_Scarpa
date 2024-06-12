<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\GoogleLoginController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProviderController;
use App\Http\Controllers\TagController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;

Route::get('/', [PageController::class, 'homepage'])->name('homepage');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [PageController::class, 'dashboard'])->name('dashboard');
});

Route::resource('posts', PostController::class);
Route::resource('tags', TagController::class);


 
Route::get('/auth/redirect', [ProviderController::class, 'redirect'])->name('github.redirect');
Route::get('/auth/callback', [ProviderController::class, 'callback'])->name('github.callback');

Route::get('/google/redirect', [GoogleLoginController::class, 'redirectToGoogle'])->name('google.redirect');
Route::get('/google/callback', [GoogleLoginController::class, 'handleGoogleCallback'])->name('google.callback');