<?php

namespace App\Http\Controllers;

use App\Models\ProductCategory;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function allReviews(){
        $reviews = Review::all();
        return view('', compact('reviews'));
    }

    public function simpanReview(Request $request){
        $validateData = $request->validate([
            'ulasan' => 'required',
            'rating' => 'required',
        ]);

        $review = Review::create([
            'ulasan' => $request->ulasan,
            'rating' => $request->rating,
            'project_id' => 1
        ]);

        $products = ProductCategory::inRandomOrder()->take(15)->get(); 
        return view('homepage', compact('products'));
    }


}
