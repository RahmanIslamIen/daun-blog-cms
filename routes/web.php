<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Models\AdminPass;
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
Route::get('masuk-panel', function () {
    return view('masuk-panel');
});
Route::put('masuk-panel/{pass}', [AdminPass::class, 'masukAdmin']);
Route::get('/admin-post', function () {
    $posts = Post::all();
    return view('admin-post', compact('posts'));
});

//tambah post
Route::get('tambah-post', [PostController::class, 'posting']);
Route::post('tambah-post', [PostController::class, 'buatPosting']);

//ubah postingan
Route::get('ubah-post/{id}', [PostController::class, 'update_data']);
Route::put('ubah-post/{id}', [PostController::class, 'update']);

//hapus postingan
Route::delete('hapus-postingan/{id}', [PostController::class, 'hapus_postingan']);

//blog post
Route::get('post/{id}', [PostController::class, 'tampil_post']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
