<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $featured_cat = Category::latest()->get();
        $flash_deal = '';
        return view('welcome', compact('featured_cat', 'flash_deal'));
    }

    public function dashboard(){
        $product = Product::latest()->get();
        $product_inventory = count($product);
        return view('pages.dashboard.dashboard', compact('product_inventory'));
    }

    public function shop(){
        return view('pages.shop-view');
    }

    public function shopCategories(){
        return view('pages.shop-categories');
    }

    public function shopCart(){
        return view('pages.shopping-cart');
    }

    public function productView(){
        return view('pages.product-view');
    }

    public function checkout(){
        return view('pages.checkout');
    }

    public function blog(){
        return view('pages.blog-default');
    }

    public function singlePost(){
        return view('pages.single-post');
    }
}
