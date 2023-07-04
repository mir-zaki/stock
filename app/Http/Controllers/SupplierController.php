<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Supplier;

use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function addsupplier(){

        return view('backend.layouts.suppliers.addsupplier');
    }
    public function store(Request $request){


        $request->validate([
            'name'=>'required',
            'email'=>'required|regex:/(.+)@(.+)\.(.+)/i',
            'address'=>'required',
            'telephone'=>'required|numeric|digits:11',
        ]);

        //  dd($request->all());
        Supplier::create([
            // name for db field || name for form fields
             'name'=>$request->name,
             'email'=> $request->email,
             'address'=>$request->address,
             'telephone'=>$request->telephone


        ]);
        return redirect()->route('supplier.manage');
    }
    public function supplier_manage(){
        $suppliers=Supplier::all();

        return view('backend.layouts.suppliers.managesupplier',compact('suppliers'));
    }
    public function supplieredit($id)

    {

        $suppliers=Supplier::find($id);
         //dd($customers->all());

        return view('backend.layouts.suppliers.editsupplier',compact('suppliers'));

    }
    public function supplierdelete($id)
    {

        $supplier=Supplier::find($id);
        // dd($customer);
        if ($supplier){
            $supplier->delete();
            return redirect()->back()->with('message','Supplier is Deleted');

        }
        return redirect()->back()->with('message','Supplier is not Deleted');
    }
    public function supplierupdate (Request $request, $id)
    {
        // dd($request->all());

        $supplier=Supplier::find($id);


        $request->validate([
            'name'=>'required',
            'email'=>'required|regex:/(.+)@(.+)\.(.+)/i',
            'address'=>'required',
            'telephone'=>'required|numeric|digits:11',
        ]);


        $supplier->update([
            'name'=>$request->name,
            'email'=> $request->email,
            'address'=>$request->address,
            'telephone'=>$request->telephone


        ]);

        return redirect()->route('supplier.manage')->with('message','Supplier Information is Updated');

    }

}
