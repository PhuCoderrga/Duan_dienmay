<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use app\Models\UserOrder;
use app\Models\Checkout_Controller;
use App\Models\User;
use App\Models\Bill;
use App\Models\BillDetail;
use App\Models\DistrictModel;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Models\ProvinceModel;
use GuzzleHttp\Handler\Proxy;
use Illuminate\Support\Facades\Redis;

class CheckoutController extends Controller
{
    public function show_checkout()
    {
        $cart = Cart::instance();
        $provinces = ProvinceModel::orderBy('tentinhthanh', 'asc')->select('tentinhthanh', 'matinhthanh')->get();
        return view('checkout', compact('cart', 'provinces'));
    }

    public function getDistrictByProvince(Request $request){
        $province = ProvinceModel::where('matinhthanh',$request->province_id)->first();
        $districts = $province->districts()->get()->toArray();
        return response()->json(['data' => $districts]);
    }
    
    public function getWardbyProvince(Request $request){
        $distric = DistrictModel::where('maquanhuyen',$request->district_id)->first();
        $wards = $distric->wards()->get()->toArray();
        return response()->json(['data' => $wards]);
    }

    public function order_product(Request $request)
    {       
        
        $cartInfor = Cart::content();          
        {
        // save
            $user = $request->get('name');
            $user = new User;
            $user->name = $request->get('name');
            $user->email = $request->get('name');
            $user->address = $request->get('address');
            $user->province_id = $request->get('province_id');
            $user->district_id = $request->get('district_id');
            $user->ward_id = $request->get('ward_id');
            $user->loaithe = $request->get('loaithe');
            $user->mathe = $request->get('mathe');
            $user->cccd = $request->get('cccd');
            $user ->Exp_year = $request->get('expyear');
            //$customer->note = $request->note;
            $user->save();

            $bill = new Bill;
            $bill->user_id = $user->id;
            $bill->date_order = date('Y-m-d H:i:s');
            $bill->id_status = 1;
            $bill->total = str_replace(',', '', Cart::total());
            $bill->save();

            if (count($cartInfor) >0) {
                foreach ($cartInfor as $key => $item) {
                    $billDetail = new BillDetail;
                    $billDetail->bill_id = $bill->id;
                    $billDetail->product_id = $item->id;
                    $billDetail->quantily = $item->qty;
                    $billDetail->price = $item->price;
                    $billDetail->save();
                }
            }
            Cart::destroy();
        }
        return view('Success_order');
    }
    public function Show_SuccessOrder(Request $request){
        
        $id = Bill::find($request->id);
        
        return view('Success_order');
    }
}