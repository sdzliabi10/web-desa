<?php
<<<<<<< HEAD
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfilDesaController;
use Illuminate\Support\Facades\Route;

// Route untuk pengunjung
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/profil-desa', [ProfilDesaController::class, 'index'])->name('profil-desa');
=======

// routes/web.php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DesaController;

Route::get('/', function () {
    return view('home');
});

Route::get('/dashboard', function () {
    return view('/admin/dashboard');
});

Route::get('/admin-profil', function () {
    return view('/admin/profil-desa/index');
});

Route::get('/profil-desa', [DesaController::class, 'index'])->name('profil-desa');

Route::get('/desa-dalam-angka', function () {
    return view('desa-dalam-angka');
});

Route::get('/desa-dalam-gambar', function () {
    return view('desa-dalam-gambar');
});

Route::get('/desa-dalam-peta', function () {
    return view('desa-dalam-peta');
});

Route::get('/desa-dalam-grafik', function () {
    return view('desa-dalam-grafik');
});

Route::get('/buku-monografi', function () {
    return view('buku-monografi');
});

Route::get('/metadata', function () {
    return view('metadata');
});

Route::get('/instrumen', function () {
    return view('instrumen');
});

>>>>>>> e805ba4 (update admin)
