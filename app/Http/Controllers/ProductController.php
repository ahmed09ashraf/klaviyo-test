<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $products =  [];
        return view('products.index');
    }

    public function search(){
        return view('products.search') ;
    }

}
