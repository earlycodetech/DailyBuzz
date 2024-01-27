<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CatagoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        return view('categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'category_name' => "required|string|max:100|unique:categories,name",
        ]);

        $catName = $request->input('category_name');
        $catSlug = Str::slug($catName, "-");


        Category::create([
            'name' => $catName,
            'slug' => $catSlug
        ]);

        return back()->with('success', "Category Created");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $slug)
    {
        // $category = Category::where('slug', '=' , $slug)->first();
        $category = Category::where('slug', '=' , $slug)->firstOrFail();
       return view('categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $slug)
    {
        $request->validate([
            'category_name' => "required|string|max:100",
        ]);

        $catName = $request->input('category_name');
        $catSlug = Str::slug($catName, "-");


        Category::where('slug', '=', $slug)->update([
            'name' => $catName,
            'slug' => $catSlug
        ]);

        // return redirect('/categories')->with('success', "Category Updated Successfully");
        return redirect()->route('categories.edit', ['category' => $catSlug])->with('success', "Category Updated Successfully");

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $slug)
    {
        Category::where('slug', '=', $slug)->delete();
        return back()->with('success', "Category has been deleted");
    }
}
