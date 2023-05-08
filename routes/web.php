<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [PagesController::class, 'index'])->name('index');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/checkout', [PagesController::class, 'checkout'])->name('checkout');
Route::get('/blog', [PagesController::class, 'blog'])->name('blog');
Route::get('/single-post', [PagesController::class, 'singlePost'])->name('blog-single');
Route::get('/shop', [PagesController::class, 'shop'])->name('shop');
Route::get('/shop-categories', [PagesController::class, 'shopCategories'])->name('shop-categories');
Route::get('/shop-cart', [PagesController::class, 'shopCart'])->name('shop-cart');
Route::get('/product-view', [PagesController::class, 'productView'])->name('product-view');

Route::get('/dashboard', [PagesController::class, 'dashboard'])->name('dashboard');
Route::post('/contactForm', [PagesController::class, 'sendMessage'])->name('contact-form');

Route::resource('product', ProductController::class);
Route::resource('category', CategoryController::class);
