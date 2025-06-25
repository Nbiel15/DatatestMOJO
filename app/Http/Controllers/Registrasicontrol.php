<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Registrasi; // 

class Registrasicontrol extends Controller
{
  public function index()
    {
        $data = Registrasi::orderBy('id')->get(); // Ambil semua data, urut berdasarkan ID
        return view('registrasi', compact('data'));
    }
}
