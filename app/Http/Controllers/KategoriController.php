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

    public function ubahKategori($id)
    {
        $kategori = Kategori::find($id);
        return view('ubah-kategori', compact('kategori'));
    }

    public function dataUbahKategori(Request $request, $id)
    {
        $kategori = Kategori::find($id);
        $kategori->nama_kategori = $request->input('nama_kategori');

        $kategori->update();
        return redirect()->back()->with('status','berhasil mengubah kategori');
    }

    public function hapusKategori($id)
    {
        $kategori = Kategori::find($id);
        $kategori->delete();
        return redirect()->back()->with('status','kategori berhasil dihapus');
    }
}
