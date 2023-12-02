<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Frontend\UserController;
use App\Http\Controllers\Frontend\HomeController;
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
});

Route::post('/login', [UserController::class, 'authenticate']);

Route::get('/register', function () {
    if(Auth::check())
    {
     return back();
    }
    return view('frontend.pages.register');
});

Route::post('/register', [UserController::class, 'register_account']);

Route::get('/logout', [UserController::class, 'logout']);
// End route Auth
Route::get('/', [HomeController::class, 'getHome']);
Route::get('/shop-list', function () {
    return view('frontend.pages.shop_list');
});
Route::get('/detail', function () {
    return view('frontend.pages.product_detail');
});
