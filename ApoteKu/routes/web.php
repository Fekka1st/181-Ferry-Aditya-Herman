<?php

use App\Http\Controllers\daftraobatcontroller;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\kategoriobatcontroller;
use App\Http\Controllers\manajemenpenggunacontroller;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\stokmasukcontroller;
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
    Route::put('kategori-obats/{kategori_obat}', [kategoriobatcontroller::class, 'update'])->name('kategori-obats.update');
    // Daftar Obat
    Route::resource('daftar-obats', daftraobatcontroller::class);
    //stok masuk
    Route::resource('stok-masuk', stokmasukcontroller::class);
    //manajemen pengguna
    Route::resource('manajemen-pengguna', manajemenpenggunacontroller::class);
});


require __DIR__.'/auth.php';
