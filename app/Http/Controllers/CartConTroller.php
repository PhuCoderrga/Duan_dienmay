<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Facade\FlareClient\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Gloudemans\Shoppingcart\Facades\Cart;
use Prophecy\Call\Call;

class CartConTroller extends Controller
{
    public function AddCart(Request $request)
    {
        $soluong = $request->input('soluong');
        $Product = Product::where('id', $request->get('id'))->first();
        Cart::add(['id' => $Product->id, 'name' => $Product->name, 'qty' => $soluong, 'price' => $Product->price, 'weight' => 1]);
        $total = Cart::subtotal();
        $cart_content = view('cart_content')->render();
        return response()->json(['subtotal' => $total, 'cart_content' => $cart_content]);
        
    }

    public function updateCart(Request $request){
        Cart::update($request->id, ['qty' => $request->quantity]); 
        $row_total = Cart::get($request->id)->price *  Cart::get($request->id)->qty; 
        $subtotal = Cart::subtotal();
        $total = Cart::total();
        return response()->json(['subtotal' => $subtotal, 'total'=> $total, 'row_total' => $row_total]);
    }
    
    public function DeleteCart(request $request)
    {
        $id= $request->id;
        Cart::remove($id);
           $subtotal = Cart::subtotal();
        $total = Cart::total();
        return response()->json(['subtotal' => $subtotal, 'total'=> $total]);
    }

    public function checkoutCart(Request $request){ 
        return View('checkout');
    }
    
}