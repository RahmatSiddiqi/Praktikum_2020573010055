<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/mahasiswa', function () {
    $nama = 'john paijoo simatupang';
    $nilai = 75;
    return view('mahasiswa', compact('nama', 'nilai'));
});

Route::get('/mahasiswa1', function () {
    $nama = '<u>Elon Musk Batubara</u>';
    $nilai = 75;
    return view('mahasiswa1', compact('nama', 'nilai'));
});

Route::get('/mahasiswa2', function () {
    $nama = 'Elon Musk Batubara';
    $nilai = -75;
    return view('mahasiswa2', compact('nama', 'nilai'));
});

Route::get('/mahasiswa3', function () {
    $nama = 'Elon Musk Batubara';
    $nilai = 75;
    return view('mahasiswa3', compact('nama', 'nilai'));
});

Route::get('/mahasiswa4', function () {
    return view('mahasiswa4');
});

Route::get('/mahasiswa5', function () {
    $nama = 'vladmir putin harahap';
    $nilai = [80, 64, 30, 76, 95];
    return view('mahasiswa5', compact('nama', 'nilai'));
});

Route::get('/mahasiswa6', function () {
    $nama = 'tya kirana putri';
    $nilai = [80, 64, 30, 76, 95];
    return view('mahasiswa6', compact('nama', 'nilai'));
});
