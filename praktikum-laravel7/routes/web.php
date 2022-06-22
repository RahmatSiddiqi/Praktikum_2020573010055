<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;

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

// Route::get('mahasiswa', function () {
//     $arrmahasiswa = ["luhut panjaitan", "jokowi", "vladmir putin", "lisa permata"];
//     return view('mahasiswa')->with('mahasiswa', $arrmahasiswa);
// });

Route::get('dosen', function () {
    $arrdosen = ["maya fitrianti,M.M.", "prof.silvia nst,M.farm.", "Dr. umar agustinus", "Dr.syahrial,M.Kom."];
    return view('dosen')->with('dosen', $arrdosen);
});

Route::get('gallery', function () {
    return view('gallery');
});

Route::get('admin', function () {
    return view('admin');
});

Route::get('mahasiswa', [MahasiswaController::class, 'index']);

Route::get('/cek-object', [MahasiswaController::class, 'cekObject']);

Route::get('/insert', [MahasiswaController::class, 'insert']);
