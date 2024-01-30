<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Post::latest()->paginate(9);
        return view('posts.index', compact('articles'));
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
        $fileName = time() . '_' . mt_rand() . "_update." . $ext;

        // 4. Move the uploaded file
        $path =  public_path("uploads");
        $file->move($path, $fileName);


        $slug =  Str::slug($request->input('title'), "-");
        Post::create([
            'category_id' => $request->input('category'),
            'title' => $request->input('title'),
            'slug' => $slug,
            'cover' => "uploads/" . $fileName,
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
        $post =  Post::findOrFail($id);
        $categories = Category::all();

        return view('posts.edit', compact('post', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $post = Post::findOrFail($id);
        $oldImage = $post->cover;
        $request->validate([
            'category' => "required|numeric|exists:categories,id",
            'title' => "required|string|unique:posts,title," . $post->id . "|max:255",
            'cover' => "nullable|image|mimes:png,jpg,jpeg|max:2028",
            'content' => "required|max:4000|string"
        ]);


        if ($request->hasFile('cover')) {

            // 1. Get the file
            $file = $request->file('cover');

            // 2. Get the file extension
            $ext =  $file->extension();

            // 3. Create a new name for the file
            $fileName = time() . '_' . mt_rand() . "_update." . $ext;

            // 4. Move the uploaded file
            $path =  public_path("uploads");
            $file->move($path, $fileName);


            $slug =  Str::slug($request->input('title'), "-");
            $news =  Post::where('id', '=', $id)->update([
                'category_id' => $request->input('category'),
                'title' => $request->input('title'),
                'slug' => $slug,
                'cover' => "uploads/" . $fileName,
                'content' => $request->input('content'),

            ]);

            if ($news) {
                if (File::exists(public_path($oldImage))) {
                    File::delete(public_path($oldImage));
                }
            }
        } else {
            // When user does not upload a file
            $slug =  Str::slug($request->input('title'), "-");
            Post::where('id', '=', $id)->update([
                'category_id' => $request->input('category'),
                'title' => $request->input('title'),
                'slug' => $slug,
                'content' => $request->input('content'),

            ]);
        }


        return back()->with('success', "Post Updated");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
