<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function posting()
    {
        return view('tambah-post');
    }

    public function buatPosting(Request $request)
    {
        $postingan = new Post;

        $postingan->title = $request->input('title');
        $postingan->penulis = $request->input('penulis');
        $postingan->tanggal = $request->input('tanggal');
        $postingan->excerpt = $request->input('excerpt');
        $postingan->konten = $request->input('konten');
        $postingan->slug = $request->input('slug');
        $postingan->save();
        return redirect()->back()->with('status','Berhasil Diposting');
    }
}
