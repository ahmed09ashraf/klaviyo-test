<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $products = Product::all() ;
        return view('products.index',compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        // Validate the form data
        $request->validate([
            'name' => 'required|string',
            'image' => 'required|url',
            'price' => 'nullable|string',
            'author' => 'nullable|string',

        ]);

        // Create a new product instance with the form data
        $product = new Product();
        $product->name = $request->input('name');
        $product->image = $request->input('image');
        $product->price = $request->input('price');
        $product->author = $request->input('author');

        // Save the product to the database
        $product->save();

        // Redirect to the product list view or any other view as desired
        return redirect()->route('products/index')->with('success', 'Product added successfully!');
    }

}
