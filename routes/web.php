<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\backend\StoreController;
use App\Http\Controllers\backend\PosController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\backend\ProductController;
use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\backend\StockController;
use App\Http\Controllers\backend\PurchaseController;
use App\Http\Controllers\backend\PaymentController;
use App\Http\Controllers\backend\ReportController;




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



//Login
Route::get('/',[LoginController::class,'login'])->name('login');
Route::post('/login',[LoginController::class,'login_user'])->name('login_user');
Route::group(['middleware'=>'auth'],function()
// ,'middleware'=>'auth'

{
    Route::group(['prefix'=>'admin','middleware'=>'admin'],function (){

        //Dashboard //last
Route::get('/dashboard',[DashboardController::class,'dashboard'])->name('dashboard');
        //dash


        });




//POS
Route::get('/pos',[PosController::class,'Point_of_Sale'])->name('pos');
Route::get('/sale/details/{id}',[PosController::class,'details'])->name('saledetails');
Route::get('/sales',[PosController::class,'Sales'])->name('sales');
Route::get('/sale/list/{id}',[PosController::class,'sale_list'])->name('sale_list');
Route::post('/pos/cart',[PosController::class,'poscart'])->name('poscart');
Route::post('/cart/sale',[PosController::class,'cart'])->name('addcart');
Route::post('/cart/post/sale',[PosController::class,'cart_post'])->name('cartpost');
Route::get('/forget',[PosController::class,'forget'])->name('forget');



//product
Route::get('/add/product',[ProductController::class,'addproduct'])->name('add.product');
Route::get('/product/manage',[ProductController::class,'product_manage'])->name('product.manage');
Route::post('/product/post',[ProductController::class,'store'])->name('product.post');
Route::get('/product/edit/{id}',[ProductController::class,'productedit'])->name('product.edit');
Route::get('/product/delete/{id}',[ProductController::class,'productdelete'])->name('product.delete');
Route::put('/product/update/{id}',[ProductController::class,'productupdate'])->name('product.update');


//category
Route::get('/category/list',[CategoryController::class,'list'])->name('category.list');
Route::post('/category/add',[CategoryController::class,'add'])->name('caterogy.add');
Route::get('/category/edit/{id}',[CategoryController::class,'categoryedit'])->name('category.edit');
Route::get('/category/delete/{id}',[CategoryController::class,'categorydelete'])->name('category.delete');
Route::put('/category/update/{id}',[CategoryController::class,'categoryupdate'])->name('category.update');


//Stock
Route::get('/stock/manage',[StockController::class,'store'])->name('stock.manage');


//User
Route::get('/adduser',[UserController::class,'adduser'])->name('add.user');
Route::get('/user/manage',[UserController::class,'user_manage'])->name('user.manage');
Route::post('/post/users',[UserController::class,'postuser'])->name('postuser');
Route::get('/user/delete/{id}',[UserController::class,'userdelete'])->name('user.delete');
Route::get('/user/edit/{id}',[UserController::class,'useredit'])->name('user.edit');
Route::put('/user/update/{id}',[UserController::class,'userupdate'])->name('user.update');


//Customer
Route::get('/add/customer', [CustomerController::class,'addcustomer'])->name('add.customer');
Route::get('/customer/manage',[CustomerController::class,'customer_manage'])->name('customer.manage');
Route::post('/customer/post',[CustomerController::class,'store'])->name('customer.post');
Route::get('/customer/edit/{id}',[CustomerController::class,'customeredit'])->name('customer.edit');
Route::get('/customer/delete/{id}',[CustomerController::class,'customerdelete'])->name('customer.delete');
Route::put('/customer/update/{id}',[CustomerController::class,'customerupdate'])->name('customer.update');


//Supplier
Route::get('/add/supplier', [SupplierController::class,'addsupplier'])->name('add.supplier');
Route::get('/supplier/manage',[SupplierController::class,'supplier_manage'])->name('supplier.manage');
Route::post('/supplier/post',[SupplierController::class,'store'])->name('supplier.post');
Route::get('/supplier/edit/{id}',[SupplierController::class,'supplieredit'])->name('supplier.edit');
Route::get('/supplier/delete/{id}',[SupplierController::class,'supplierdelete'])->name('supplier.delete');
Route::put('/supplier/update/{id}',[SupplierController::class,'supplierupdate'])->name('supplier.update');



//purchase
Route::get('/add/purchase', [PurchaseController::class,'addpurchase'])->name('add.purchase');
Route::get('/add/purchase', [PurchaseController::class,'addhistory'])->name('add.purchase');
Route::get('/manage/purchases',[PurchaseController::class,'manage_purchase'])->name('manage.purchases');
Route::post('/cart/purchases',[PurchaseController::class,'cart'])->name('cart');
Route::post('/cart/post/purchase',[PurchaseController::class,'cart_post'])->name('cart_post');
Route::get('/purchases/details/{id}',[PurchaseController::class,'details'])->name('details');



//payment
Route::get('/customer/payment', [PaymentController::class,'customer_payment'])->name('customer.payment');
Route::get('/supplier/payment', [PaymentController::class,'supplier_payment'])->name('supplier.payment');
Route::get('/addpay/supplier/{id}',[PaymentController::class,'addpay_supplier'])->name('addpay.supplier');
Route::get('/addpay/customer/{id}',[PaymentController::class,'addpay_customer'])->name('addpay.customer');
Route::post('/payment/manage',[PaymentController::class,'paymanage'])->name('paymanage');
Route::post('/payment/manage/customer',[PaymentController::class,'paymanage_customer'])->name('paymanage.customer');


//Report
Route::get('/report/purchase', [ReportController::class,'purchase_report'])->name('report.purchase');
Route::get('/report/sales', [ReportController::class,'sales_report'])->name('report.sales');

//Logout
Route::get('/logout',[LoginController::class,'logout'])->name('logout');


});
