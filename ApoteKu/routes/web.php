<?php

use App\Http\Controllers\daftraobatcontroller;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\kategoriobatcontroller;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth', 'role:Admin'])->group(function () {
    Route::get('/dashboard', [dashboardController::class, 'index'])->name('dashboard');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // kelola kategori
    Route::resource('kategori-obats', kategoriobatcontroller::class);
    Route::get('kategori-obats/{kategori_obat}/edit', [kategoriobatcontroller::class, 'edit'])->name('kategori-obats.edit');
    Route::put('kategori-obats/{kategori_obat}', [kategoriobatcontroller::class, 'update'])->name('kategori-obats.update');
    // Daftar Obat
    Route::resource('daftar-obats', daftraobatcontroller::class);
    Route::get('daftar-obats/{kategori_obat}/edit', [daftraobatcontroller::class, 'edit'])->name('daftar-obats.edit');
    Route::put('daftar-obats/{kategori_obat}', [daftraobatcontroller::class, 'update'])->name('daftar-obats.update');
});


require __DIR__.'/auth.php';
