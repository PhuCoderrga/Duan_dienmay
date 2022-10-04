<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Product_category;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\DB;

class InsertProductController extends Controller
{
    public function index()
    {
        $categories = Product_category::select('id', 'name')->latest()->get();
        return view('admin.insert_product', compact('categories'));
    }

    public function insert_product(Request $request)
    {
        // $name = $request->input('name');
        // $slug = $request->input('slug');
        // $price = $request->input('price');
        // $price_disc = $request->input('price_disc');
        // $desc_short = $request->input('desc_short');
        // $desc_long = $request->input('desc_long');
        // $data = array('name' => $name, "slug" => $slug, "price" => $price, "category_id" => 1, "price_discount" => $price_disc, "desc_short" => $desc_short, "desc_long" => $desc_long);
        // DB::table('products')->insert($data);
        if ($request->hasFile('feature_img')) {
            $file = $request->file('feature_img');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(('user/assets/img'), $filename);
            $file_path = 'user/assets/img/' . $filename;
            $data = $request->all();
            $data['feature_img'] = $file_path;
            
            Product::create($data);
            return back()->with('success', 'Đăng sản phẩm thành công');
        } else {
            return 'khong co file';
        }
    }

    public function show_product(Request $request)
    {
        $id = $request->id;
        $product = DB::table('products')->where('id', $id)->first();
        return view('admin.UpdateProduct', ['product' => $product]);
    }

    public function update_product(Request $request, $id)
    {
        $product = Product::find($id);
        $data = $request->all();
        $data['category_id'] = 1;
        $product->update($data);
        return back()->with('success', 'cập nhập sản phẩm thành công');
    }
    public function delete_product(Request $request)
    {
        $product = Product::find($request->id);
        $product->delete();
        return back()->with('success', 'cập nhập sản phẩm thành công');
    }
    
    public function show_cart()
    {
        $cart = Cart::instance();
        return view('cart', compact('cart'));
    }
}