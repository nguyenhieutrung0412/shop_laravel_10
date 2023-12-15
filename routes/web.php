<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Frontend\UserController;
use App\Http\Controllers\Frontend\ShopController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\AjaxController;
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
//Route Auth
Route::get('/login', function () {
    if(Auth::check())
    {
     return back();
    }
    return view('frontend.pages.login');
})->name('login');

Route::post('/login', [UserController::class, 'authenticate']);

Route::get('/register', function () {
    if(Auth::check())
    {
     return back();
    }
    return view('frontend.pages.register');
})->name('register');

Route::post('/register', [UserController::class, 'register_account']);

Route::get('/logout', [UserController::class, 'logout'])->name('logout');
// End route Auth
Route::get('/', [HomeController::class, 'getHome'])->name('home');
Route::get('/shop-list', [ShopController::class,'index'])->name('shop_list');
 Route::get('/detail/{id}', [ShopController::class,'productDetailByID'])->name('product_detail');
//  Route::get('/detail/{id}', function($id){
//     return view('frontend.pages.product_detail');
// })->name('product_detail');
//  Route::get('/detail', function(){
//     return view('frontend.pages.product_detail');
//  })->name('product_detail');
Route::post('/view_data', [AjaxController::class, 'getDetailProductAjax'])->name('view_data');
// Route::post('/view_data', 'AjaxController@getDetailProductAjax')->name('view_data');
