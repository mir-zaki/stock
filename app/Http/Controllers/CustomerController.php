<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Customer;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function addcustomer(){
        // $customers=Customer::all();
        return view('backend.layouts.customers.addcustomer');
    }
    public function store(Request $request){

        $request->validate([
            'name'=>'required',
            'email'=>'required|regex:/(.+)@(.+)\.(.+)/i',
            'address'=>'required',
            'telephone'=>'required|numeric|digits:11',
        ]);
        // dd($request->all());
        Customer::create([
            // name for db field || name for form fields
             'name'=>$request->name,
             'email'=> $request->email,
             'address'=>$request->address,
             'telephone'=>$request->telephone


        ]);
        return redirect()->route('customer.manage');
    }
    public function customer_manage(){
        $customers=Customer::all();
        //dd($customers);
        return view('backend.layouts.customers.managecustomer',compact('customers'));
    }
    public function customeredit($id)

    {

        $customers=Customer::find($id);
         //dd($customers->all());

        return view('backend.layouts.customers.editcustomer',compact('customers'));

    }
    public function customerdelete($id)
    {

        $customer=Customer::find($id);
        // dd($customer);
        if ($customer){
            $customer->delete();
            return redirect()->back()->with('message','Customer is Deleted');

        }
        return redirect()->back()->with('message','Customer is not Deleted');
    }
    public function customerupdate (Request $request, $id)
    {
        // dd($request->all());

        $customers=Customer::find($id);

        $request->validate([
            'name'=>'required',
            'email'=>'required|regex:/(.+)@(.+)\.(.+)/i',
            'address'=>'required',
            'telephone'=>'required|numeric|digits:11',
        ]);


        $customers->update([
            'name'=>$request->name,
            'email'=> $request->email,
            'address'=>$request->address,
            'telephone'=>$request->telephone


        ]);

        return redirect()->route('customer.manage')->with('message','Customer Information is Updated');

    }
}
