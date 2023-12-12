<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [ProductController::class,'produkPilihan'])->name('home');

Route::get('/katalog', [ProductController::class,'listProduk'])->name('katalog');

Route::get('/produk-detail/{product}', [ProductController::class,'detailProduk'])->name('produk_detail');

Route::get('/kategori-produk/{category}', [ProductController::class,'kategoriProduk'])->name('kategori_produk');

Route::get('/cara-pemesanan', function () {
    return view('cara_pemesanan');
})->name('cara_pemesanan');

Route::get('/buat-produk', function () {
    return view('buat_produk');
})->name('buat_produk');

Route::get('/cara-pembayaran', function () {
    return view('cara_pembayaran');
})->name('cara_pembayaran');

Route::get('/contact', function () {
    return view('contact');
})->name('kontak');

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
