<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product_category;

class ProductCategoryController extends Controller
{
    //
    public function index()
    {
        $products = DB::table('products');
        return view('product', ['products' => $products]);
    }
    /*admin*/
    public function index_admin()
    {
        $product_category = DB::table('product_category');
        return view('admin.product_category', ['product_category' => $product_category]);
    }
    public function create()
    {
        return view('admin.insert_product_category');
    }

    public function insert_product_category(Request $request)
    {

        // $name = $request->input('name');
        // $slug = $request->input('slug');
        // $price = $request->input('price');
        // $price_disc = $request->input('price_disc');
        // $desc_short = $request->input('desc_short');
        // $desc_long = $request->input('desc_long');
        // $data = array('name' => $name, "slug" => $slug, "price" => $price, "category_id" => 1, "price_discount" => $price_disc, "desc_short" => $desc_short, "desc_long" => $desc_long);
        // DB::table('products')->insert($data);
        $data = $request->all();
        product_Category::create($data);
        return back()->with('success', 'Đăng sản phẩm thành công');
    }
    public function Show_ProductCategory(Request $request)
    {
        $id = $request->id;
        $ProductCategory = DB::table('product_category')->where('id', $id)->first();
        return view('admin.UpdateProductCategory', ['ProductCategory' => $ProductCategory]);
    }

    public function Update_ProductCategory(Request $request, $id)
    {
        $ProductCategory = Product_category::find($id);
        $data = $request->all();
        $data['category_id'] = 1;
        $ProductCategory->update($data);
        return back()->with('success', 'cập nhập sản phẩm thành công');
    }
    
    public function Delete_ProductCategory(Request $request)
    {
        $ProductCategory = Product_category::find($request->id);
        $ProductCategory->delete();
        return back()->with('success', 'cập nhập sản phẩm thành công');
    }
}