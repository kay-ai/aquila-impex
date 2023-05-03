<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::orderBy('name', 'asc')->get();

        return view('pages.dashboard.category.add-category', compact('categories'));
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
            'image.*' => 'nullable|image|max:2048'
        ]);

        // Generate a unique slug for the category
        $slug = Str::slug($request->input('name'), '-');
        $slugCount = Category::where('slug', 'LIKE', "{$slug}%")->count();

        if ($slugCount > 0) {
            $slug = "{$slug}-" . ($slugCount + 1);
        }

        // Create the new category
        $category = new Category;
        $category->name = $request->input('name');
        $category->slug = $slug;

        // Upload and store the category image
        if ($request->hasFile('image')) {
            $image = $request->file('image');

            $fileName = time().'_'.$image->getClientOriginalName();
            $image->storeAs('/public/category', $fileName);
        }else{
            $fileName = '';
        }

        $category->image = $fileName;
        $category->save();

        return redirect()->back()->with('success', 'Category created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
