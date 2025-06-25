<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LoginGuide;

class PanduanControl extends Controller
{
    public function index()
    {
        $data = LoginGuide::orderBy('id')->get(); // Ambil semua data, urut berdasarkan ID
        return view('panduan', compact('data'));
    }
}