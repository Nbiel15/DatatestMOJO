<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\itr;
use App\Models\krk;

class krkcontrol extends Controller
{public function index()
    {
        $data = krk::orderBy('id')->get(); // Ambil semua data dari tabel data_keluarga
        return view('krk',  compact('data')); // arahkan ke blade view 'panduan'
        
    }

}
