<?php

use App\Http\Controllers\kategoriobatcontroller;
use Illuminate\Support\Facades\Route;


//beranda
Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function(){
    return view('Authentication.login');
});

Route::get('/dashboard', function(){
    return view('Admin.dashboard');
});
Route::get('/daftar_obat', function(){
    return view('Admin.manajemen_produk.daftar_obat');
});


// kelola kategori
Route::resource('kategori-obats', kategoriobatcontroller::class);
Route::get('kategori-obats/{kategori_obat}/edit', [kategoriobatcontroller::class, 'edit'])->name('kategori-obats.edit');
Route::put('kategori-obats/{kategori_obat}', [kategoriobatcontroller::class, 'update'])->name('kategori-obats.update');
