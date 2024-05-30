<?php

namespace App\Http\Controllers;

use App\Models\Roles;
use App\Models\User;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class manajemenpenggunacontroller extends Controller
{
    //
    public function index(){
        $title = 'Hapus Data!';
        $text = "Kamu Yakin Mau Hapus Data?";
        confirmDelete($title, $text);

        $user = User::all();
        $roles = Roles::all();
        return view('Admin.manajemen_pengguna.index',compact('user','roles'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'foto' => 'required|image',
            'role_id' => 'required',
            'password' => 'required|min:5',
        ]);

        $filename =
        round(microtime(true) * 1000) .
        "-" .
        str_replace(
            " ",
            "-",
            $request->file("foto")->getClientOriginalName()
        );
    $request
        ->file("foto")
        ->move(public_path("img/profile"), $filename);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'foto' =>"/img/profile/" . $filename,
            'role_id' => $request->role_id,
            'password' => bcrypt($request->password),
        ]);
        Alert::success('Success', 'Obat berhasil ditambahkan');
        return back();
    }

    public function destroy(string $id)
    {
        $data = User::find($id);
        if ($data->foto) {
            $oldFilePath = public_path($data->foto);
            if (file_exists($oldFilePath)) {
                unlink($oldFilePath);
            }
        }
        User::destroy($id);
        toast('Data Berhasil dihapus','success');
        return back();
    }
}
