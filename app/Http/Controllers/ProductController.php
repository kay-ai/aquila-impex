<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Inventory;
use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::where('in_stock', true)->get();

        return view('pages.dashboard.product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::orderBy('name', 'asc')->get();

        return view('pages.dashboard.product.add-product', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // Validate the request data
        $validate = $request->validate([
            'name' => 'required|max:255',
            'short_desc' => 'required',
            'price' => 'required|numeric|min:0',
            'cat_id' => 'required|exists:categories,id',
            'image.*' => 'nullable|image|max:2048'
        ]);

        // Generate a unique slug for the product
        $slug = Str::slug($request->input('name'), '-');
        $slugCount = Product::where('slug', 'LIKE', "{$slug}%")->count();

        if ($slugCount > 0) {
            $slug = "{$slug}-" . ($slugCount + 1);
        }

        // Create the new product
        $product = new Product;
        $product->name = $request->input('name');
        $product->slug = $slug;
        $product->long_desc = $request->input('long_desc');
        $product->short_desc = $request->input('short_desc');
        $product->price = $request->input('price');
        $product->weight = $request->input('weight');
        $product->category_id = $request->input('cat_id');
        $product->save();

        // Upload and store the product images
        if ($request->hasFile('images')) {
            $images = $request->file('images');

            // dd($images);
            foreach ($images as $image) {
                $fileName = time().'_'.$image->getClientOriginalName();
                $path = $image->storeAs('/public/product', $fileName);

                $productImage = new ProductImage;
                $productImage->product_id = $product->id;
                $productImage->path = $path;
                $productImage->save();
            }
        }

        // Create a new inventory entry for the product
        $inventory = new Inventory;
        $inventory->product_id = $product->id;
        $inventory->quantity = $request->input('quantity');
        $inventory->barcode = $request->input('barcode');
        $inventory->vendor = $request->input('vendor');
        $inventory->unit = $request->input('unit', 'units');
        $inventory->save();

        return redirect()->back()->with('success', 'Product created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $product = Product::where('slug', $slug)->first();

        return view('pages.product-view', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
