<?php

namespace App\Http\Controllers;

use App\Models\obats;
use App\Models\stockmasuks;
use App\Models\stokmasuks;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class stokmasukcontroller extends Controller
{
    //
    public function index()
    {
        $stokmasuk = stockmasuks::all();
        $obat = obats::all();
        $title = 'Hapus Data!';
        $text = "Kamu Yakin Mau Hapus Data?";
        confirmDelete($title, $text);
        return view('Admin.manajemen_stock.stock_masuk',compact('stokmasuk','obat'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'obat_id' => 'required',
            'jumlah' => 'required|numeric',
        ]);

        try {
            stockmasuks::create([
                'obat_id' => $request->obat_id,
                'id_user' => Auth::id(),
                'jumlah' => $request->jumlah,
            ]);

            $obat = obats::find($request->obat_id);
            $obat->stok += $request->jumlah;
            $obat->save();

            Alert::success('Success', 'Obat berhasil ditambahkan');
        } catch (\Exception $e) {
            Alert::error('Error', 'Gagal menambahkan obat');

        }
        // dd($e);
        return redirect()->route('stok-masuk.index');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'obat_id' => 'required|exists:daftar_obats,id',
            'jumlah' => 'required|numeric',
        ]);

        try {
            $stokObat = stockmasuks::findOrFail($id);
            $oldObat = obats::find($stokObat->obat_id);
            $oldObat->stok -= $stokObat->jumlah;
            $oldObat->save();

            $stokObat->obat_id = $request->obat_id;
            $stokObat->id_user = Auth::id();
            $stokObat->jumlah = $request->jumlah;
            $stokObat->save();

            $newObat = obats::find($request->obat_id);
            $newObat->stok += $request->jumlah;
            $newObat->save();

            Alert::success('Success', 'Stok obat berhasil diperbarui');
        } catch (\Exception $e) {
            Alert::error('Error', 'Gagal memperbarui stok obat');
        }

        return redirect()->route('daftar-obats.index');
    }

    public function destroy($id)
    {
        try {
            $stokObat = stockmasuks::findOrFail($id);

            $obat = obats::find($stokObat->obat_id);
            $obat->stok -= $stokObat->jumlah;
            $obat->save();

            $stokObat->delete();

            Alert::success('Success', 'Stok obat berhasil dihapus');
        } catch (\Exception $e) {
            Alert::error('Error', 'Gagal menghapus stok obat');
        }

        return back();
    }
}
