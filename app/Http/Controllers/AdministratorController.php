<?php

namespace App\Http\Controllers;

use App\Administrator;
use Illuminate\Http\Request;

class AdministratorController extends Controller
{

    public function index()
    {
        $data = Administrator::orderBy('id', 'DESC')->paginate(10);
        return view('admin.administrator.index', compact('data'));
    }

    public function create()
    {
    }

    public function store(Request $req)
    {
        $attr = $req->all();
        $check = Administrator::where('nama', $req->nama)->first();
        if ($check != null) {
            toastr()->error('Nama administrator Sudah Ada');
            return back();
        } else {
            Administrator::create($attr);
            toastr()->success('Nama administrator Berhasil Di Simpan');
            return back();
        }
    }


    public function edit($id)
    {
        $data = Administrator::orderBy('id', 'DESC')->paginate(10);
        $edit = Administrator::find($id);
        return view('admin.administrator.edit', compact('data', 'edit'));
    }

    public function update(Request $req, $id)
    {
        $attr = $req->all();
        $data = Administrator::find($id)->update($attr);
        toastr()->success('administrator Berhasil Di Update');
        return redirect('/data/administrator');
    }

    public function delete($id)
    {
        try {
            Administrator::find($id)->delete();
            toastr()->success('Nama administrator Berhasil Di Hapus');
            return redirect('/data/administrator');
        } catch (\Exception $e) {
            toastr()->error('Tidak bisa di hapus karena ada bahan yg mengacu pada data ini');
            return back();
        }
    }
}
