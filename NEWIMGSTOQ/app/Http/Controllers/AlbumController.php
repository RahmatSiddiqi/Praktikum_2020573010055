<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlbumController extends Controller
{
    public function index()
    {
        return view('album/index');
    }
    public function upload()
    {
        return view('album/upload');
    }
}
