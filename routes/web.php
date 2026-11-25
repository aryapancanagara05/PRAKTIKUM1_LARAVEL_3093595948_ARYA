<?php

use App\Http\Controllers\KunjunganController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/index',[KunjunganController::class, 'index']);
// Route::post('/index',[KunjunganController::class, 'index']);
// Route::get('/index',[KunjunganController::class, 'index']);