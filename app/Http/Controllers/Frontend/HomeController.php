<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class HomeController extends Controller
{
    public function getHome(){
        //get allcategories
        $categories = Category::all();
        $product = Product::all();
        return view('frontend.pages.index')
        ->with('categories', $categories)
        ->with('product', $product);
    }
}
