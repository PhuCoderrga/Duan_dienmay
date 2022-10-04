<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductDetailcontroller extends Controller
{
    public function index()
    {
        $products = DB::table('products');
        return view('detail', ['products' => $products]);
    }

    public function show(Request $request)
    {
        $slug = $request->slug;
        $product = DB::table('products')->where('slug', $slug)->first();
        return view('detail', ['product' => $product]);
    }
}