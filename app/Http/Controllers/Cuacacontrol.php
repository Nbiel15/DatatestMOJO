<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\cuaca; // 

class Cuacacontrol extends Controller
{public function index()
    {
        $data = cuaca::orderBy('id')->get(); // Ambil semua data dari tabel data_keluarga
        return view('cuaca',  compact('data')); // arahkan ke blade view 'panduan'
        
    }

}
