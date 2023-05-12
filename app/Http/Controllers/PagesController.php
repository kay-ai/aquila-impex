<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Mail\OrderPlaced;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PagesController extends Controller
{


    public function sendMessage(Request $request){
        $email = $request->email;
        $mail = [
            'greeting' => 'Hello '.$request->full_name,
            'body' => 'Your order has been received.',
            'name' => $request->full_name,
            'email' => $request->email,
            'product' => $request->product,
            'salutation' => 'Best Regards'
        ];

        $mail2 = [
            'greeting' => 'Hello Admin,',
            'body' => 'A new order has been received.',
            'name' => $request->full_name,
            'email' => $request->email,
            'product' => $request->product,
            'salutation' => 'Best Regards'
        ];

        Mail::to($email)->send(new OrderPlaced($mail));

        // Send email to yourself
        Mail::to('info@aquilla-alliedimpex.com')->send(new OrderPlaced($mail2));

        return redirect()->back()->with('success', 'Order Placed Successfully');
    }

    public function index(){
        return view('index');
    }

    public function store(){
        $featured_cat = Category::latest()->get();
        $flash_deal = '';
        return view('welcome', compact('featured_cat', 'flash_deal'));
    }

    public function dashboard()
    {
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
