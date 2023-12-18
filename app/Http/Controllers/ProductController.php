<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Image;
use App\Models\ProductCategory;
use Database\Seeders\ProductSeeder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ProductController extends Controller
{
    public function listProduk(){
        $product_category = ProductCategory::all();
        $categories = Category::all();
        return view('katalog', compact('product_category', 'categories'));
    }

    public function detailProduk(Product $product){
        $productRec = Product::inRandomOrder()->take(10)->get();
        $imagePaths = Image::where('product_id', $product->id)
            ->limit(3) 
            ->pluck('gambar');
        $path1 = $imagePaths[0] ?? null;
        $path2 = $imagePaths[1] ?? null;
        $path3 = $imagePaths[2] ?? null;
        return view('produk_detail', compact('product', 'productRec', 'path1', 'path2', 'path3'));
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

    public function listProdukAdmin(Request $request){
        if($request->has('search')){
            $products = Product::where('nama', 'like','%'. $request->search .'%')->get();
        }else{
            $products = Product::paginate(2);
        }
        $categories = Category::all();
        $total_products = Product::count();
        $user = Auth::user();
        return view('buat_produk', compact('products', 'categories', 'total_products', 'user'));
    }

    public function tambahProduk(){
        $categories = Category::all();
        $user = Auth::user();
        return view('tambah_produk', compact('categories', 'user'));
    }

    public function simpanProduk(Request $request){
        // $request->validate([
        //     'nama' => 'required|unique:products',
        //     'harga' => 'required',
        //     'kondisi' => 'required',
        //     'waktu_preorder' => 'required',
        //     'minimal_pemesanan' => 'required',
        //     'kategori' => 'required',
        //     'material' => 'required',
        //     'furnish' => 'required',
        //     'ukruan' => 'required',
        // ]);

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
            $i = 1;
            foreach ($files as $file) {
                $imageName = $newlyCreatedProduct->id.'_'.$i.'.'.$file->extension();
                $path = $file->storeAs('products', $imageName, 'public');
                $i++;

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

        if($request->has('search')){
            $products = Product::where('nama', 'like','%'. $request->search .'%')->get();
        }else{
            $products = Product::all();
        }
        $categories = Category::all();
        $total_products = Product::count();
        $user = Auth::user();
        return view('buat_produk', compact('products', 'categories', 'total_products', 'user'));
    }

    public function editProduk(Product $product){
        $produkEdit = Product::where('id', $product->id)->first();
        $categories = Category::all();
        return view('edit_produk', compact('produkEdit', 'categories'));
    }
    
    public function updateProduk(Request $request, Product $product){
        $product->update([
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

        $images = Image::where('product_id', $product->id);

        $oldImagePaths = [];

        foreach($images as $image){
            $oldImagePaths[] = public_path("storage/. $image");
        }

        foreach ($oldImagePaths as $path) {
            if (file_exists($path)) {
                unlink($path);
            }
        }

        $files = $request->file('gambar');

        if ($request->hasFile('gambar')) {
            $i = 1;
            foreach ($files as $file) {
                $imageName = $product->id.'_'.$i.'.'.$file->extension();
                $path = $file->storeAs('products', $imageName, 'public');
                $i++;
            }
        }

        if($request->has('search')){
            $products = Product::where('nama', 'like','%'. $request->search .'%')->get();
        }else{
            $products = Product::all();
        }
        $categories = Category::all();
        $total_products = Product::count();
        $user = Auth::user();
        return view('buat_produk', compact('products', 'categories', 'total_products', 'user'));
    }

    public function deleteProduk(Request $request, Product $product){
        $images = Image::where('product_id', $product->id)->get();

        $oldImagePaths = [];

        foreach($images as $image){
            $oldImagePaths[] = public_path("storage/. $image");
        }

        foreach ($oldImagePaths as $path) {
            if (file_exists($path)) {
                unlink($path);
            }
        }

        $product->delete();

        if($request->has('search')){
            $products = Product::where('nama', 'like','%'. $request->search .'%')->get();
        }else{
            $products = Product::all();
        }
        $categories = Category::all();
        $total_products = Product::count();
        $user = Auth::user();
        return view('buat_produk', compact('products', 'categories', 'total_products', 'user'));
    }
}
