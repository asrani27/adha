<?php

namespace App\Http\Controllers;

use App\Bahan;
use App\Harga;
use App\Pasar;
use App\Berita;
use App\Profil;
use App\Slider;
use App\Kategori;
use App\Komentar;
use Carbon\Carbon;
use Carbon\CarbonPeriod;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FrontEndController extends Controller
{
    public function beranda()
    {
        if (Auth::check()) {
            if (Auth::user()->hasRole('superadmin')) {
                return redirect('/home');
            }
        }

        $berita = Berita::orderBy('id', 'DESC')->limit(4)->get();
        $slider = Slider::orderBy('id', 'DESC')->get();
        $firstSlider = Slider::first();

        return view('frontend.beranda', compact('berita', 'slider', 'firstSlider'));
    }

    public function kategori($id)
    {
        $kategori = Kategori::find($id);
        $berita = Berita::where('kategori_id', $id)->orderBy('id', 'DESC')->paginate(10);
        return view('frontend.kategori', compact('berita', 'kategori'));
    }

    public function detailartikel($id)
    {
        $data = Berita::find($id);
        $komentar = Komentar::where('berita_id', $id)->orderBy('id', 'DESC')->get();
        return view('frontend.detailartikel', compact('data', 'komentar'));
    }

    public function simpanKomen(Request $req, $id)
    {
        $k = new Komentar;
        $k->berita_id = $id;
        $k->nama = $req->nama;
        $k->isi = $req->isi;
        $k->save();
        toastr()->success('Komentar Berhasil Di Simpan');
        return back();
    }


    public function login()
    {
        return view('frontend.login');
    }

    public function artikel()
    {
        $berita = Berita::orderBy('id', 'DESC')->paginate(10);
        return view('frontend.artikel', compact('berita'));
    }

    public function profil()
    {
        $profil = Profil::first();
        return view('frontend.profil', compact('profil'));
    }
}
