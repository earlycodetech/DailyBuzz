<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->paginate(10);
        // $items = [];
        return view('welcome', compact('posts'));
    }


    public function get_products()
    {
        // p = $product
        $product = "LG";
        $prod = "Iphone";
        $item =  "Samsung";
        // return view('products')->with('item', $product);

        
        // return view('products', compact('product', 'prod', 'item'));

        return view('products', [
            'spain' => $product,
        ]);
    }


    public function show_product($name)
    {
        if ($name == 'samsung') {
            $price = 1000;
        }
        elseif ($name ==  'iphone') {
            $price =  500;
        }else {
            $price = 0;
        }
        //return view('products', compact('price', 'name'));
    }

    public function library($book,$chapter)
    {
        //return view('book');
    }

    public function pro(){
        return view('contact');
    }
    public function view($slug)
    {

        $post = Post::where('slug', $slug)->firstOrFail();
        return view('view', compact('post'));
    }
}
