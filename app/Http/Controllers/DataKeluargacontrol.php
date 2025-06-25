<?php

namespace App\Http\Controllers;
use App\Models\DataKeluarga; // pastikan namespace model ini benar

class DataKeluargacontrol extends Controller
{
    public function index()
    {
        $data = DataKeluarga::orderBy('id')->get(); // Ambil semua data dari tabel data_keluarga
        return view('DataKeluarga',  compact('data')); // arahkan ke blade view 'panduan'
        
    }
}
