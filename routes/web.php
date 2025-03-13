<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfilDesaController;
use Illuminate\Support\Facades\Route;

// Route untuk pengunjung
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/profil-desa', [ProfilDesaController::class, 'index'])->name('profil-desa');
