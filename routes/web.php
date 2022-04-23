<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Models\Post;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//halaman home
Route::get('/', function () {
    $posts = Post::all();
    return view('all-post', compact('posts'));
});

//admin post
Route::get('/admin-post', function () {
    $posts = Post::all();
    return view('admin-post', compact('posts'));
});

Route::get('tambah-post', [PostController::class, 'posting']);
Route::post('tambah-post', [PostController::class, 'buatPosting']);

//blog post
Route::get('post/{id}', [PostController::class, 'tampil_post']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
