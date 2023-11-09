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
        return view('produk_detail', compact('product'));
    }

    public function kategoriProduk($category_id){
        $product_category = ProductCategory::where('category_id', $category_id)->get();
        $categories = Category::all();
        return view('katalog', compact('product_category', 'categories'));
    }
}
