<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Image;
use App\Models\ProductCategory;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function listProduk(){
        $product_category = ProductCategory::all();
        $categories = Category::all();
        return view('katalog', compact('product_category', 'categories'));
    }

    public function detailProduk(Product $product){
        $productRec = Product::inRandomOrder()->take(10)->get();
        return view('produk_detail', compact('product', 'productRec'));
    }

    public function kategoriProduk($category_id){
        $product_category = ProductCategory::where('category_id', $category_id)->get();
        $categories = Category::all();
        $current_category = Category::find($category_id);
        return view('katalog', compact('product_category', 'categories', 'current_category'));
    }

    public function produkPilihan() {
        $products = ProductCategory::inRandomOrder()->take(15)->get(); 
        return view('homepage', compact('products'));
    }

    public function listProdukAdmin(){
        $product_category = ProductCategory::all();
        $categories = Category::all();
        return view('buat_produk', compact('product_category', 'categories'));
    }

    public function tambahProduk(){
        $categories = Category::all();
        return view('tambah_produk', compact('categories'));
    }

    public function simpanProduk(Request $request){
        $validateData = $request->validate([
            'nama' => 'required',
            'harga' => 'required',
        ]);

        $product = Product::create([
            'nama' => $request->nama,
            'harga' => $request->harga,
            'kondisi' => $request->kondisi,
            'waktu_preorder' => $request->waktu_preorder,
            'minimal_pemesanan' => $request->minimal_pemesanan,
            'kategori' => $request->kategori,
            'material' => $request->material,
            'furnish' => $request->furnish,
            'ukuran' => $request->ukuran
        ]);

        $files = $request->file('gambar');
        $newlyCreatedProduct = Product::find($product->id);

        if ($request->hasFile('gambar')) {
            foreach ($files as $file) {
                $name = $file->getClientOriginalName();
                $path = $file->storeAs('products', $name, 'public');

                Image::create([
                    'product_id' => $newlyCreatedProduct->id,
                    'gambar' => $path,
                ]);
            }
        }

        ProductCategory::create([
            'category_id' => $newlyCreatedProduct->kategori,
            'product_id' => $newlyCreatedProduct->id
        ]);

        $product_category = ProductCategory::all();
        $categories = Category::all();
        return view('buat_produk', compact('product_category', 'categories'));
    }
    
}
