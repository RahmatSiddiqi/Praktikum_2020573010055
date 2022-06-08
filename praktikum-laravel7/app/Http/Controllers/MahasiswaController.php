<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function show()
    {
    }
    public function index()
    {
        $nama = '<u>joko widoidoi</u>';
        $nilai = 75;
        return view('mahasiswa', compact('nama', 'nilai'));
    }
}
