<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\ShopController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\UserController;

Route::get('/', [DashboardController::class,'index'])->name('dashboard');

Route::get('/terms', function(){
    return view('terms');
});

Route::get('/register', [RegisterController::class,'register'])->name('register');
Route::post('/register', [RegisterController::class,'store']);

Route::get('/login', [RegisterController::class,'login'])->name('login');
Route::post('/login', [RegisterController::class,'authenticate']);
Route::post('/logout', [RegisterController::class,'logout'])->name('logout');

Route::get('/shop', [ShopController::class,'index']);

Route::resource('users', UserController::class)->only('show','edit','update')->middleware('auth');

Route::post('/reviews', [ReviewController::class,'store'])->name('reviews.store');
Route::get('/reviews/{review}', [ReviewController::class,'show'])->name('reviews.show');
Route::get('/reviews/{review}/edit', [ReviewController::class,'edit'])->name('reviews.edit');
Route::put('/reviews/{review}', [ReviewController::class,'update'])->name('reviews.update');
Route::delete('/reviews/{review}', [ReviewController::class,'destroy'])->name('reviews.destroy');

Route::post('/reviews/{review}/comments', [CommentController::class,'store'])->name('reviews.comments.store');

Route::get('/cart', 'CartController@viewCart')->name('cart');
Route::post('/add-to-cart', [CartController::class, 'addToCart'])->name('add_to_cart');

Route::get('/search', [ShopController::class, 'search'])->name('product.search');
Route::get('/product/{id}', 'ShopController@show')->name('product.show');

Route::get('profile',[UserController::class,'profile'])->middleware('auth')->name('profile');
