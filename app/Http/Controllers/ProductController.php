<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
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
        $products = ProductCategory::inRandomOrder()->take(9)->get(); 
        return view('home', compact('products'));
    }
}
