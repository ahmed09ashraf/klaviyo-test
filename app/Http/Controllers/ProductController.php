<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show($id)
    {
        // Fetch the product details from the database
        $product = Product::find($id);

        // Pass the product details to the product page template
        return view('product.show', ['product' => $product]);
    }
}
