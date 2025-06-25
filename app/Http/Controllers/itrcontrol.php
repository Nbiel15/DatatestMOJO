<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\itr; 

class itrcontrol extends Controller
{public function index()
    {
        $data = itr::orderBy('id')->get(); // Ambil semua data dari tabel data_keluarga
        return view('itr',  compact('data')); // arahkan ke blade view 'panduan'
        
    }

}
