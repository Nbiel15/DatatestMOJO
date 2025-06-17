<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Panduancontrol;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/panduan', [Panduancontrol::class, 'index']);