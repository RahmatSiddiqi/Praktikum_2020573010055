<?php

namespace App\Http\Controllers;

use App\Models\mahasiswas;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    // public function show()
    // {
    // }
    // public function index()
    // {
    //     $nama = '<u>joko widoidoi</u>';
    //     $nilai = 75;
    //     return view('mahasiswa', compact('nama', 'nilai'));
    // }
    public function cekObject()
    {
        // return "ini adalah object";
        $mahasiswa = new mahasiswas();
        dump($mahasiswa);
    }

    public function insert()
    {
        $mahasiswa = new mahasiswas();
        $mahasiswa->nim = '12345';
        $mahasiswa->nama = 'rahmat';
        $mahasiswa->tanggal_lahir = '2001-04-24';
        $mahasiswa->ipk = '3.5';
        $mahasiswa->save();
        dump($mahasiswa);
    }
}
