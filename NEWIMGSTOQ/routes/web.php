<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\BerandaController;
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


Route::get('/upload', [AlbumController::class, 'upload']);
Route::get('/about', [AboutController::class, 'index']);
Route::get('/album', [AlbumController::class, 'index']);
Route::get('/beranda', [BerandaController::class, 'index']);
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [BerandaController::class, 'index'])->name('home');
