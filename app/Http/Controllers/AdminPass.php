<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Models\AdminPass;

class AdminPass extends Controller
{
    public function masukAdmin(Request $request)
    {
        $data = $request->input('passcode');

        if ($data = '12345') {
            return redirect('admin-post');
        }else{
            return redirect('/');
        }
        
    }

}
