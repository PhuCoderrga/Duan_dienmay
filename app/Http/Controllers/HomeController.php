<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    //
    public function index()
    {
        $products = DB::table('products');
        return view('index', ['products' => $products]);
    }
    public function search(Request $request)
    {
        if($request->ajax())
        {
            $output="";
            $products=DB::table('products')->where('name','LIKE','%'.$request->search."%")->get();
            if($products)
            {
            foreach ($products as $key => $product) 
            {
                $output.= '
                <div class="item w-100 border my-1">
                    <a href="'. route('detail.index', ['slug' => $product->slug]) .'">
                    '.$product->name.'
                    </a>
                </div>';
            }
                return Response($output);
            }
        }
    }
}