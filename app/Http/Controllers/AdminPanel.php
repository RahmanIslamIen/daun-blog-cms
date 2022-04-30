<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
// use Auth;

class AdminPanel extends Controller
{
    public function panelUtama()
    {
        $data = Auth::user()->roles;

        $rute = 0;
        if($data == 'admin'){
            $rute = 'admin-post';
            $posts = Post::all();
            return view($rute, compact('posts'));
        }else{
             return redirect('/');
        }
        
    }
}
