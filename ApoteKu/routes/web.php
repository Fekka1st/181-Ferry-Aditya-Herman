<?php

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

Route::get('/kategori_obat', function(){
    return view('Admin.manajemen_produk.kategori_obat');
});
