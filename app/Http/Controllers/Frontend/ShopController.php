<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use Illuminate\Http\RedirectResponse;

class ShopController extends Controller
{
    public function index(){
        $product = Product::paginate(3);
        return view('frontend.pages.shop_list')->with('product',$product);
    }
    public function productDetailByID($id){
        $productbyid = DB::table('products')->where('id',$id)->first();
       
        if(!isset($productbyid))
        {
            return back();
        }
        else{
            return view('frontend.pages.product_detail')->with('productbyid',$productbyid);
        }
       
    }

}
