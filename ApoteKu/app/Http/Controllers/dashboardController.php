<?php

namespace App\Http\Controllers;

use App\Models\obats;
use App\Models\stockmasuks;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class dashboardController extends Controller
{
    //
    public function index()
    {
        $user = Auth::user();
        $datauser = User::join('roles', 'users.role_id', '=', 'roles.id')
                    ->take(3)
                    ->get(['users.foto', 'users.name', 'roles.nama_role']);
        $jumlah = User::count();
        $obats = obats::where('stok', '<', 5)->get();
        $jumlahobat = obats::count();
        $totalStokMasuk = stockmasuks::sum('jumlah');
        $stokMasukPerBulan = stockmasuks::selectRaw('MONTH(created_at) as bulan, SUM(jumlah) as total')
            ->groupBy('bulan')
            ->orderBy('bulan')
            ->get();

        // Format data untuk chart
        $chartstokmasuk = array_fill(0, 12, 0);
        foreach ($stokMasukPerBulan as $stok) {
            $chartstokmasuk[$stok->bulan - 1] = $stok->total;
        }


        return view('Admin.dashboard', compact('user','datauser','jumlah','obats','jumlahobat','totalStokMasuk','chartstokmasuk'));
    }
}
