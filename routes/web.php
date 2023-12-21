<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProgressController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ReviewController;
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
Route::middleware(['auth'])->group(function(){
    Route::get('/projects', [ProjectController::class, 'indexProject'])->name('projects');
    Route::post('/simpan-project', [ProjectController::class, 'storeProject'])->name('store_project');
    Route::get('/detail-project/{id}', [ProjectController::class, 'projectDetail'])->name('detail_project');

    Route::post('/add-comment', [CommentController::class, 'addComment'])->name('add_comment');
    Route::get('/pembayaran', [PaymentController::class, 'listPembayaran'])->name('pembayaran');
});

Route::middleware(['admin'])->group(function(){
    Route::get('/buat-produk', [ProductController::class,'listProdukAdmin'])->name('buat_produk');
    Route::get('/tambah-produk', [ProductController::class,'tambahProduk'])->name('tambah_produk');
    Route::post('/simpan-produk', [ProductController::class,'simpanProduk'])->name('simpan_produk');
    Route::get('/edit-produk/{product}', [ProductController::class,'editProduk'])->name('edit_produk');
    Route::put('/update-produk/{product}', [ProductController::class, 'updateProduk'])->name('update_produk');
    Route::delete('/delete-produk/{product}', [ProductController::class, 'deleteProduk'])->name('delete_produk');

    Route::get('/tambah-project', [ProjectController::class, 'tambahProject'])->name('tambah_project');
    Route::put('/assign-client/{project}', [ProjectController::class, 'assignClient'])->name('assign_client');
    Route::post('/add-progress', [ProgressController::class, 'addProgress'])->name('add_progress');

    Route::post('/konfirmasi-pembayaran/{payment}', [PaymentController::class, 'konfirmasiPembayaran'])->name('konfirmasi_pembayaran');
    Route::post('/penolakan-pembayaran/{payment}', [PaymentController::class, 'penolakanPembayaran'])->name('penolakan_pembayaran');
});

Route::middleware(['client'])->group(function(){
    Route::post('/simpan-review', [ReviewController::class,'simpanReview'])->name('simpan_review');

    Route::post('/simpan-pembayaran', [PaymentController::class, 'simpanPembayaran'])->middleware('auth')->name('simpan_pembayaran');
});

//company profile
Route::get('/home', [ProductController::class,'produkPilihan'])->name('home');
Route::get('/katalog', [ProductController::class,'listProduk'])->name('katalog');
Route::get('/produk-detail/{product}', [ProductController::class,'detailProduk'])->name('produk_detail');
Route::get('/kategori-produk/{category}', [ProductController::class,'kategoriProduk'])->name('kategori_produk');
Route::get('/cara-pemesanan', function () { return view('cara_pemesanan'); })->name('cara_pemesanan');
Route::get('/cara-pembayaran', function () { return view('cara_pembayaran'); })->name('cara_pembayaran');
Route::get('/contact', function () { return view('contact');})->name('kontak');
Route::get('/reviews', [ReviewController::class,'allReviews'])->name('all_reviews');

Auth::routes();

//produk
// Route::get('/buat-produk', [ProductController::class,'listProdukAdmin'])->middleware('auth')->name('buat_produk');
// Route::get('/tambah-produk', [ProductController::class,'tambahProduk'])->name('tambah_produk');
// Route::post('/simpan-produk', [ProductController::class,'simpanProduk'])->name('simpan_produk');
// Route::get('/edit-produk/{product}', [ProductController::class,'editProduk'])->name('edit_produk');
// Route::put('/update-produk/{product}', [ProductController::class, 'updateProduk'])->name('update_produk');
// Route::delete('/delete-produk/{product}', [ProductController::class, 'deleteProduk'])->name('delete_produk');

//project
// Route::get('/projects', [ProjectController::class, 'indexProject'])->middleware('auth')->name('projects');
// Route::get('/tambah-project', [ProjectController::class, 'tambahProject'])->middleware('auth')->name('tambah_project');
// Route::post('/simpan-project', [ProjectController::class, 'storeProject'])->middleware('auth')->name('store_project');
// Route::get('/detail-project/{id}', [ProjectController::class, 'projectDetail'])->middleware('auth')->name('detail_project');
// Route::put('/assign-client/{project}', [ProjectController::class, 'assignClient'])->middleware('admin')->name('assign_client');
// Route::post('/add-progress', [ProgressController::class, 'addProgress'])->middleware('admin')->name('add_progress');
// Route::post('/add-comment', [CommentController::class, 'addComment'])->middleware('auth')->name('add_comment');


//Review
// Route::get('/reviews', [ReviewController::class,'allReviews'])->middleware('auth')->name('all_reviews');
// Route::post('/simpan-review', [ReviewController::class,'simpanReview'])->name('simpan_review');
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/pembayaran', [PaymentController::class, 'listPembayaran'])->middleware('auth')->name('pembayaran');
// Route::post('/simpan-pembayaran', [PaymentController::class, 'simpanPembayaran'])->middleware('auth')->name('simpan_pembayaran');
// Route::post('/konfirmasi-pembayaran/{payment}', [PaymentController::class, 'konfirmasiPembayaran'])->middleware('auth')->name('konfirmasi_pembayaran');
// Route::post('/penolakan-pembayaran/{payment}', [PaymentController::class, 'penolakanPembayaran'])->middleware('auth')->name('penolakan_pembayaran');

Route::get('/baru', function () {
    return view('baru');
})->name('baru');