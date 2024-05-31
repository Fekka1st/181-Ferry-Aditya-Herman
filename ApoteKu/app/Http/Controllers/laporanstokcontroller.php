<?php

namespace App\Http\Controllers;

use App\Models\kategori_obats;
use App\Models\obats;
use Illuminate\Http\Request;

class laporanstokcontroller extends Controller
{
    //
    public function index()
    {
        $daftar_obats = obats::all();
        $kategori_obats = kategori_obats::get(['id','nama_kategori']);
        return view('Admin.laporan.stock', compact('daftar_obats','kategori_obats'));
    }
}
