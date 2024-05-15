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
