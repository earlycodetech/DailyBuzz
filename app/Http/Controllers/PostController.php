<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('posts.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::latest()->get();
        return view('posts.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'category' => "required|numeric|exists:categories,id",
            'title' => "required|string|unique:posts,title|max:255",
            'cover' => "required|image|mimes:png,jpg,jpeg|max:2028",
            'content' => "required|max:4000|string"
        ]);


        // 1. Get the file
        $file = $request->file('cover');

        // 2. Get the file extension
        $ext =  $file->extension();

        // 3. Create a new name for the file
        $fileName= time() .'_'. mt_rand() ."_update." . $ext;

        // 4. Move the uploaded file
        $path =  public_path("uploads");
        $file->move($path, $fileName);


        $slug =  Str::slug($request->input('title'), "-");
        Post::create([
            'category_id' => $request->input('category'),
            'title' => $request->input('title'),
            'slug' => $slug,
            'cover' => "uploads/". $fileName,
            'content' => $request->input('content'),
            
        ]);

        return back()->with('success', "Post Created");
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
