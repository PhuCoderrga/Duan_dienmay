<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\StatusModel;
use App\Models\Bill;
use App\Models\User;
use App\Models\UserOrder;
use Illuminate\Support\Facades\Auth;
use GuzzleHttp\Psr7\Request as Psr7Request;

use function PHPSTORM_META\map;

class AdminController extends Controller
{
    //
    public function index()
    {
        return view('admin/index');
    }
    
    public function Show_login()
    {
        return view('admin.login');
    }
    
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        $email = $request->get('email');
        $user = User::where('email', $email )->first();
        if ($user != null){
            if (Auth::guard('admin')->attempt($request->only('email','password'))) {
                return redirect()->route('admin.home');
            }else{
                session()->flash('message', 'Tài khoản hoặc mật khẩu chưa chính xác');
                return redirect()->back();
            }
        }else{
            session()->flash('message', 'Tài khoản không hợp lệ');
            return redirect()->back();
        }
    }
    public function store(Request $request) {
        auth()->logout();
        return redirect()->route('admin.login');
    }
    /*Checkout*/
    public function show_list_bill()
    {
        $Bill_Details = DB::table('users')
                        ->join('bills', 'users.id', '=', 'bills.user_id' )
                        ->join('status','bills.id_status' ,'=', 'status.id')
                        ->select('users.name as name_customer','bills.total as total_bill','bills.date_order as bill_date','bills.id as bill_id', 'status.name as status_name' )
                        ->get();
        return view('admin.List_Bill' ,['Bill_Details' => $Bill_Details]);
    }
    
    public function Show_BillDetails(Request $request)
    {
        $id = $request->id;
        $billdetail =DB::table('bills')
                    ->join('status','status.id' ,'=', 'bills.id_status')
                    ->join('users', 'users.id', '=', 'bills.user_id')
                    ->where('bills.id',$id)
                    ->select('users.name as user_name', 'status.id as status_id','bills.date_order as bill_date_order', 'bills.total as bill_total')  
                    ->get();
        $products = DB::table('bill_details')
                    ->join('products','products.id', '=', 'bill_details.product_id')
                    ->where('bill_id', $id)
                    ->select('products.name as product_name','bill_details.quantily as bill_quantity', 'bill_details.price as bill_price' )
                    ->get();
                    
        $status = StatusModel::select('id', 'name')->get();
        return view('admin.BillDetails', compact('billdetail','products', 'status'));
    }
    
    public function Update_BillDetails(Request $request, $id){
        $bill = Bill::find($id);
        $id_status = $request->get('status');
        $bill->update(['id_status' => $id_status]);
        return back()->with('success', 'cập nhập sản phẩm thành công');
    }
}