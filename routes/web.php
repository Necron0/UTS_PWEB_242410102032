<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', function () {
    return redirect('/dashboard');
});

Route::get('/login', [PageController::class, 'login']);
Route::get('/dashboard', [PageController::class, 'dashboard']);
Route::get('/pengelolaan',[PageController::class, 'index']);
Route::get('/profile', [PageController::class, 'profile']);
