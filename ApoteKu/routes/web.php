<?php

use App\Http\Controllers\checkupcontroller;
use App\Http\Controllers\daftraobatcontroller;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\kategoriobatcontroller;
use App\Http\Controllers\manajemenpenggunacontroller;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\stokmasukcontroller;
use App\Http\Controllers\laporanstokcontroller;
use App\Http\Controllers\stokkeluarcontroller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth', 'role:Admin'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // kelola kategori
    Route::resource('kategori-obats', KategoriObatController::class);
    Route::put('kategori-obats/{kategori_obat}', [KategoriObatController::class, 'update'])->name('kategori-obats.update');
    // Daftar Obat
    Route::resource('daftar-obats', daftraobatcontroller::class);
    // stok masuk
    Route::resource('stok-masuk', StokMasukController::class);
    // manajemen pengguna
    Route::resource('manajemen-pengguna', ManajemenPenggunaController::class);
    // laporan stok
    Route::resource('laporan-stok', LaporanStokController::class);
});

// Route untuk Kasir
Route::middleware(['auth', 'role:Kasir'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    // stok keluar
    Route::resource('stok-keluar', stokkeluarcontroller::class);
    // stok masuk
    Route::resource('stok-masuk', StokMasukController::class);
    Route::resource('check-up', checkupcontroller::class);

});

// Route untuk Supplier
Route::middleware(['auth', 'role:Supplier'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Daftar Obat
    Route::resource('daftar-obats', daftraobatcontroller::class);
    // stok masuk
    Route::resource('stok-masuk', StokMasukController::class);
    // laporan stok
    Route::resource('laporan-stok', LaporanStokController::class);
});


require __DIR__.'/auth.php';
