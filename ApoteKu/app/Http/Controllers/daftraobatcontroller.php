<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class daftraobatcontroller extends Controller
{
    //
    public function index()
    {
        $kategoriObats = kategori_obats::all();
        $title = 'Delete User!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);
        return view('Admin.manajemen_produk.kategori_obat', compact('kategoriObats'));
    }
}
