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
// no 1
Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home', [
        'title' => 'home'
    ]);
});

Route::get('/profile', function () {
    return view('profile', [
        'title' => 'profile'
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'title' => 'about'
    ]);
});

/*
//no 2
Route::get('/', function () {
    return view("welcome");
});

Route::get('/belajar', function () {
    echo '<h1>hello world </h1>';
    echo '<p>sedang belajar laravel</p>';
});

Route::get('/mahasiswa/profil/coba', function () {
    echo '<h2 style="text-align:center"><u>welcome profil coba </u><h2>';
});

// no 3
Route::get('/mahasiswa/{nama}', function ($nama) {
    return "tampilkan data mahasiswa bernama $nama";
});

//no 4
Route::get('/stok_barang/{jenis}/{merek}', function ($jenis, $merek) {
    return "cek sisa stok untuk $jenis $merek";
});

Route::get('/stok_barang/{jenis}/{merek}', function ($a, $b) {
    echo "cek sisa stok untuk $a $b";
});

//no 5
Route::get('/stok_barang/{jenis?}/{merek?}', function ($a = 'smartphone', $b = 'samsung') {
    return "cek sisa stok untuk $a $b";
});

//no 6
Route::get('/user/{id}', function ($id) {
    return "tampilkan user dengan id = $id";
});

Route::get('/user/{id}', function ($id) {
    return "tampilkan user dengan id = $id";
})->where('id', '[0-9]+');

Route::get('/user/{id}', function ($id) {
    return "tampilkan user dengan id = $id";
})->where('id', '[A-Z]{2}[0-9]+');

//no 7
Route::get('/hubungi_kami', function () {
    return '<h1>Hubungi Kami</h1>';
});
Route::redirect('/contact_us', '/hubungi_kami');
//no 8
Route::prefix('/admin')->group(function () {
    Route::get('/mahasiswa', function () {
        echo "<h1>Daftar Mahasiswa</h1>";
    });
    Route::get('/dosen', function () {
        echo "<h1>Daftar dosen</h1>";
    });
    Route::get('/karyawan', function () {
        echo "<h1>Daftar karyawan</h1>";
    });
});
// no 9
Route::fallback(function () {
    return "maaf, alamat tidak di temukan";
});
//no 10

Route::get('/buku/1', function () {
    return "Buku Ke-1";
});
Route::get('/buku/1', function () {
    return "Buku Saya Ke-1";
});
Route::get('/buku/1', function () {
    return "Buku Kita Ke-1";
});

Route::get('/buku/{a}', function ($a) {
    return "Buku ke-$a";
});
Route::get('/buku/{b}', function ($b) {
    return "Buku Saya ke-$b";
});
Route::get('/buku/{c}', function ($c) {
    return "Buku Kita ke-$c";
});

Route::get('mahasiswa/andi', function () {
    echo "Halaman Mahasiswa Andi";
});
// ini sama
Route::get('/mahasiswa/andi', function () {
    echo "Halaman Mahasiswa Andi";
});
*/
