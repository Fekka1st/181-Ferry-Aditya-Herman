<?php

namespace App\Http\Controllers;

use App\Models\kategori_obats;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class kategoriobatcontroller extends Controller
{
    public function index()
    {
        $kategoriObats = kategori_obats::all();
        $title = 'Delete User!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);
        return view('Admin.manajemen_produk.kategori_obat', compact('kategoriObats'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_kategori' => 'required|unique:kategori_obats'
        ]);

        try {
            kategori_obats::create($request->all());
            toast('Data Berhasil ditambahkan','success');
            return back();
        } catch (\Exception $e) {
            Alert::error('error!', 'Gagal membuat kategori obat');
            return back();
        }
    }

    public function edit(kategori_obats $kategoriObat)
    {
        return view('Admin.manajemen_produk.edit_kategori_obat', compact('kategoriObat'));
    }

    public function update(Request $request, kategori_obats $kategoriObat)
    {
        $request->validate([
            'nama_kategori' => 'required|unique:kategori_obats,nama,' . $kategoriObat->id,
        ]);
        try {
            $kategoriObat->update($request->all());
            toast('Data Berhasil diedit','success');
            return back();
        } catch (\Exception $e) {
            return back();
        }
    }

    public function destroy(kategori_obats $kategoriObat)
    {
        try {
            $kategoriObat->delete();
            toast('Data Berhasil dihapus','success');
            return back();
        } catch (\Exception $e) {
            return back();
        }
    }
}
