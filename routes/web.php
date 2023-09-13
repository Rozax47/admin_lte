<?php

use App\Http\Controllers\BukuController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index', [
        'title' => 'Home',
        'judul' => 'Welcome to Sepuh Library',
        'subjudul' => 'Sepuh Library',
        'notif' => 'Akumah Masih Pemula'
    ]);
});

Route::resource('/dashboard/siswa', SiswaController::class);

Route::resource('/dashboard/petugas', PetugasController::class);

Route::resource('/dashboard/buku', BukuController::class);

Route::resource('/dashboard/peminjaman', PeminjamanController::class);

Route::get('/login', [LoginController::class, 'index']);

Route::post('/login', [LoginController::class, 'authenticate']);

Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index']);

Route::post('/register', [RegisterController::class, 'store']);


