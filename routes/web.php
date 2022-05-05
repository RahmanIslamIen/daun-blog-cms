<?php

use App\Http\Controllers\AdminPanel;
use App\Http\Controllers\KategoriController;
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
Route::get('admin-post', [AdminPanel::class, 'panelUtama']);

//kelola kategori
Route::get('kelola-kategori', [KategoriController::class, 'semuaKategori']);
Route::post('kategoribaru', [KategoriController::class, 'simpanKategori']);
Route::get('ubah-kategori/{id}', [KategoriController::class, 'ubahKategori']);
Route::put('ubah-kategori/{id}', [KategoriController::class, 'dataUbahKategori']);
Route::delete('hapus-kategori/{id}', [StudentController::class, 'hapusKategori']);

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
