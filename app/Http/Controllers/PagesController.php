<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
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
