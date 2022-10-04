<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminControllerTable extends Controller
{
    //
    public function index()
    {
        $products = DB::table('products');
        return view('admin.tables', ['products' => $products]);
    }
}