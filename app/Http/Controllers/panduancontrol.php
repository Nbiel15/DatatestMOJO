<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LoginGuide;

class Panduancontrol extends Controller
{
    public function index()
    {
        $loginGuides = LoginGuide::all();
        return view('panduan', compact('loginGuides'));
    }
}
