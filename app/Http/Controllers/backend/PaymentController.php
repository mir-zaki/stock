<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\Payment;
use App\Models\Paymentcustomer;
use App\Models\Purchase;
use App\Models\Sale;
use App\Models\Supplier;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function customer_payment(){
        $pay=Paymentcustomer::all();

        return view('backend.layouts.payment.customerpayment',compact('pay'));
    }
    public function supplier_payment(){
        $pay=Payment::all();

        return view('backend.layouts.payment.supplierpayment',compact('pay'));
    }
    public function addpay_supplier($id){

        $buys=Purchase::with('supplier')->where('id',$id)->first();



        return view('backend.layouts.payment.paysupplier',compact('buys'));

    }

    public function addpay_customer($id){

        $sales=Sale::with('customer')->where('id',$id)->get();
        // dd($sales);
        return view('backend.layouts.payment.paycustomer',compact('sales'));

    }
    public function paymanage(Request $request)

    {
        $request->validate([
            'payment_date'=>'required',
           'account_type'=>'required',
            'name'=>'required',
           'pay'=>'required',
           'refer'=>'required',
           'pay_method'=>'required',

        ]);

        Payment::create([
            'payment_date'=>$request->pay_date,
            'account_type'=>$request->type,
            'name'=>$request->name,
            'amount'=>$request->amount,
            'pay'=>$request->pay,
            'refer'=>$request->ref,
            'pay_method'=>$request->pay_method
        ]);
        return redirect()->route('supplier.payment');
    }
    public function paymanage_customer(Request $request)
    {

        Paymentcustomer::create([
            'payment_date'=>$request->pay_date,
            'account_type'=>$request->type,
            'name'=>$request->customer_id,
            'refer'=>$request->ref,
            'amount'=>$request->amount,
            'pay'=>$request->pay,
            'pay_method'=>$request->pay_method
        ]);
        return redirect()->route('customer.payment');
    }

}
