<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Panduancontrol;
use App\Http\Controllers\DataKeluargacontrol;
use App\Http\Controllers\Registrasicontrol;
use App\Http\Controllers\Cuacacontrol;
use App\Http\Controllers\itrcontrol;
use App\Http\Controllers\krkcontrol;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/panduan', [Panduancontrol::class, 'index']);

Route::get('/index', function () {
    return view('index');
});

Route::get('/Datakeluarga', [DataKeluargacontrol::class, 'index']);


Route::get('/registrasi', [Registrasicontrol::class, 'index']);


Route::get('/cuaca', [Cuacacontrol::class, 'index']);

Route::get('/itr', [itrcontrol::class, 'index']);

Route::get('/krk', [krkcontrol::class, 'index']);

