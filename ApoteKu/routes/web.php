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



Route::get('kategori-obats', 'kategoriobatcontroller@index')->name('kategori-obats.index');
Route::get('kategori-obats/create', 'kategoriobatcontroller@create')->name('kategori-obats.create');
Route::post('kategori-obats', 'kategoriobatcontroller@store')->name('kategori-obats.store');
Route::get('kategori-obats/{kategori_obat}', 'kategoriobatcontroller@show')->name('kategori-obats.show');
Route::get('kategori-obats/{kategori_obat}/edit', 'kategoriobatcontroller@edit')->name('kategori-obats.edit');
Route::put('kategori-obats/{kategori_obat}', 'kategoriobatcontroller@update')->name('kategori-obats.update');
Route::delete('kategori-obats/{kategori_obat}', 'kategoriobatcontroller@destroy')->name('kategori-obats.destroy');

