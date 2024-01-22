<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $items = ['pencil', 'shoes', 'bag', 'calaculator', 'books', 'textbooks'];
        // $items = [];
        return view('welcome', compact('items'));
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
}
