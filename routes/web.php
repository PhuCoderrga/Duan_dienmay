<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminControllerTable;
use App\Http\Controllers\CartConTroller;
use App\Http\Controllers\CheckoutController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\Admin;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InsertProductController;
use App\Http\Controllers\ProductCategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductDetailcontroller;
use Illuminate\Support\Facades\Auth;
use App\Models\CheckoutController as ModelsCheckoutController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*user*/
Route::get('/', [HomeController::class, 'index'])->name('user.home');
Route::get('/danh-muc-san-pham', [ProductCategoryController::class, 'index'])->name('category.index');
Route::get('/chi-tiet-san-pham/{slug}', [ProductDetailcontroller::class, 'show'])->name('detail.index');
/*cart*/
route::get('gio-hang', [InsertProductController::class, 'show_cart'])->name('cart.index');
/*addcart*/
route::post('them-gio-hang', [CartConTroller::class, 'addcart'])->name('addcart');
route::post('cap-nhat-gio-hang', [CartConTroller::class, 'updateCart'])->name('update.cart');
/*deletecart*/
route::post('xoa-sp-gio-hang', [CartConTroller::class, 'DeleteCart',])->name('deletecart');

/*check-out */
route::get('thanh-toan', [CheckoutController::class, 'show_checkout'])->name('checkout.user');
/*Quan Huyen*/ 
Route::get('lay-quan-huyen', [CheckoutController::class, 'getDistrictByProvince'])->name('checkout.getDistrict');
/*Phuong xa*/ 
Route::get('lay-phuong-xa', [CheckoutController::class, 'getWardbyProvince'])->name('checkout.getWard');
/*Succes Order*/ 
route::get('thong-bao-thanh-cong', [CheckoutController::class, 'Show_SuccessOrder'])-> name('checkout.succesorder');

route::post('tao-don-hang',[CheckoutController::class, 'order_product'])->name('order.index');
/*Tim kiem */
Route::get('/search',[HomeController::class, 'search'])->name('search');

/*---------------------------------------------------------------------------------*/
/*login admin*/
route::get('admin-login',[AdminController::class, 'Show_login'])->name('admin.login');
route::get('admin-login-xu-ly',[AdminController::class, 'login'])->name('admin.login.get');

/*Phân Quyền*/ 
route::middleware('Admin')->group(function()
{
    /*logout admin*/
    Route::post("/logout",[AdminController::class,"store"])->name("logout");
    /*admin*/
    route::get('/admin', [AdminController::class, 'index'])->name('admin.home');
    /*product*/
    /*Them san pham*/
    route::get('/table', [AdminControllerTable::class, 'index'])->name('table.index');
    route::get('/them-san-pham', [InsertProductController::class, 'index'])->name('insert.index');
    Route::post('create', [InsertProductController::class, 'insert_product'])->name('insert.product.post');

    /*Sua san pham*/
    Route::get('chinh-sua-san-pham/{id}', [InsertProductController::class, 'show_product'])->name('update.product');
    Route::post('chinh-sua-san-pham/{id}', [InsertProductController::class, 'update_product'])->name('update.product.get');
    /*Xoa san pham*/
    route::delete('xoa-san-pham', [InsertProductController::class, 'delete_product'])->name('delete.product');

    /*productCategory*/
    /*Thêm danh muc*/
    Route::get('danh-muc-san-pham-admin', [ProductCategoryController::class, 'index_admin'])->name('admim.product_category');
    Route::get('them-danh-muc-san-pham', [ProductCategoryController::class, 'create']);
    Route::post('them-danh-muc-san-pham', [ProductCategoryController::class, 'insert_product_category'])->name('insert.product_category.post');
    /*Chỉnh sửa danh mục*/
    Route::get('chinh-sua-danh-muc/{id}', [ProductCategoryController::class, 'Show_ProductCategory'])->name('update.ProductCategory');
    Route::post('chinh-sua-danh-muc/{id}', [ProductCategoryController::class, 'Update_ProductCategory'])->name('update.ProductCategory.get');
    /*Xóa Danh mục*/
    route::delete('xoa-danh-muc', [ProductCategoryController::class, 'Delete_ProductCategory'])->name('delete.ProductCategory');


    /*checkout*/
    /*Danh sách đơn hàng*/ 
    route::get('danh-sach-don-hang', [AdminController::class, 'show_list_bill'])->name('show_list_bill');
    /*Cập nhập đơn hàng*/
    route::get('cap-nhap-don-hang/{id}', [AdminController::class, 'Show_BillDetails'])->name('update.billdetails');
    route::post('cap-nhap-don-hang/{id}', [AdminController::class, 'Update_BillDetails'])->name('update.billdetails.get');
});