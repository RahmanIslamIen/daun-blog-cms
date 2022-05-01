<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;

class KategoriController extends Controller
{
    public function semuaKategori()
    {
        $semuaKategori = Kategori::all();
        return view('kelola-kategori', compact('semuaKategori'));
    }

    public function simpanKategori(Request $request)
    {
        $kategoriBaru = new Kategori;
        $kategoriBaru->nama_kategori = $request->input('nama_kategori');
        $kategoriBaru->save();
        return redirect()->back()->with('status','Berhasil Menambahkan Kategori Baru');
    }
}
