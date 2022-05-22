<?php

namespace App\Http\Controllers;

use App\Profil;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function index()
    {
        $check = Profil::first();
        if ($check == null) {
            return view('admin.profil.add');
        } else {
            $data = $check;
            return view('admin.profil.edit', compact('data'));
        }
    }

    public function store(Request $req)
    {
        $attr = $req->all();
        toastr()->success('Berhasil Di Simpan');
        Profil::create($attr);
        return redirect('/data/profil');
    }

    public function update(Request $req, $id)
    {
        $attr = $req->all();
        Profil::find($id)->update($attr);
        toastr()->success('Berhasil Di update');
        return redirect('/data/profil');
    }
}
