<?php

namespace App\Http\Controllers;

use App\Models\kategori_obats;
use App\Models\obats;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class daftraobatcontroller extends Controller
{
    //
    public function index()
    {
        $daftar_obats = obats::all();
        $kategori_obats = kategori_obats::get(['id','nama_kategori']);
        $title = 'Delete User!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);
        return view('Admin.manajemen_produk.daftar_obat', compact('daftar_obats','kategori_obats'));
    }

    public function edit(obats $obat)
    {
        return view('edit', compact('obat'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'kategori_obats_id' => 'required',
            'harga_beli' => 'required|numeric',
            'harga_jual' => 'required|numeric',
            'satuan' => 'required'
        ]);

        try {

            obats::create([
                'nama' => $request->nama,
                'kategori_obats_id' => $request->kategori_obats_id,
                'stok' => 0 ,
                'harga_jual' => $request->harga_jual,
                'harga_beli' => $request->harga_beli,
                'satuan' => $request->satuan,
            ]);

            Alert::success('Success', 'Obat berhasil ditambahkan');
        } catch (\Exception $e) {
            Alert::error('Error', 'Gagal menambahkan obat');
        }
        // dd($request->all());
        return redirect()->route('daftar-obats.index');
    }

    // public function update(Request $request, Obats $obat)
    // {
    //     $request->validate([
    //         'nama' => 'required',
    //         'kategori_obats_id' => 'required',
    //         'harga_beli' => 'required|numeric',
    //         'harga_jual' => 'required|numeric',
    //         'satuan' => 'required'
    //     ]);
    //     try {
    //         $obat->update([
    //             'nama' => $request->nama,
    //             'kategori_obats_id' => $request->kategori_obats_id,
    //             'harga_beli' => $request->harga_beli,
    //             'harga_jual' => $request->harga_jual,
    //             'satuan' => $request->satuan,
    //         ]);
    //         Alert::success('Success', 'Obat berhasil diperbarui');
    //     } catch (\Exception $e) {
    //         Alert::error('Error', 'Gagal memperbarui obat');
    //     }

    //    return back();
    // }

    public function update(Request $request , $id)
    {
        $request->validate([
            'nama' => 'required',
            'kategori_obats_id' => 'required',
            'harga_beli' => 'required|numeric',
            'harga_jual' => 'required|numeric',
            'satuan' => 'required'
        ]);


        try {
            $obat = Obats::find($id);
            if (!$obat) {
                toast('Gagal Edit obat','Error');
                return back();
            }

            $obat->update([
            "nama" => $request->nama,
            "kategori_obats_id" => $request->kategori_obats_id,
            "harga_beli" => $request->harga_beli,
            "harga_jual" => $request->harga_jual,
            "satuan" => $request->satuan,
        ]);
        toast('Data Berhasil diedit','success');
        } catch (\Exception $e) {
            toast('Gagal Edit obat','Error');
        }
        return back();
    }



    public function destroy(obats $daftar_obat)
    {
        try {
            $daftar_obat->delete();
            toast('Data Berhasil dihapus','success');
        } catch (\Exception $e) {
            toast('Gagal Hapus obat','Error');
        }
        return back();
    }
}
