<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Komentar;

class PostController extends Controller
{
    //fungsi kontrol postingan
    public function posting()
    {
        return view('tambah-post');
    }

    public function buatPosting(Request $request)
    {
        $postingan = new Post;

        $postingan->title = $request->input('title');
        $postingan->kategori = $request->input('kategori');
        $postingan->penulis = $request->input('penulis');
        $postingan->tanggal = $request->input('tanggal');
        $postingan->excerpt = $request->input('excerpt');
        $postingan->konten = $request->input('konten');
        
        $postingan->save();
        return redirect()->back()->with('status','Berhasil Diposting');
    }

    public function tampil_post($id)
    {
        $posts = Post::all()->where('id', $id);
        
        return view('post', compact('posts'));
    }

    public function update_data($id)
    {
        $postingan = Post::find($id);
        return view('ubah-post', compact('postingan'));
    }

    public function update(Request $request, $id)
    {
        $postingan = Post::find($id);
        $postingan->title = $request->input('title');
        $postingan->kategori = $request->input('kategori');
        $postingan->penulis = $request->input('penulis');
        $postingan->tanggal = $request->input('tanggal');
        $postingan->excerpt = $request->input('excerpt');
        $postingan->konten = $request->input('konten');

        $postingan->update();
        return redirect()->back()->with('status','berhasil update artikel');
    }

    public function hapus_postingan($id)
    {
        $postingan = Post::find($id);
        $postingan->delete();
        return redirect()->back()->with('status','Berhasil menghapus postingan');
    }

    //fungsi komentar pada postingan
    
}
