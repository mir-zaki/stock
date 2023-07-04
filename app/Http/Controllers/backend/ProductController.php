<?php

namespace App\Http\Controllers\backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{
    public function addproduct(){
        $categories=Category::all();

        return view('backend.layouts.product.addproduct',compact('categories'));
    }
    public function store(Request $request){
        //dd($request->all());

         $request->validate([
             'name'=>'required',
            'category_id'=>'required',
             'price'=>'required|numeric',
            'description'=>'required',
            'availabilty'=>'required',

         ]);
        Product::create([
            // name for db field || name for form fields
            'name'=>$request->name,
            'category_id'=>$request->category,
            'price'=>$request->price,
            'description'=>$request->description,
            'availabilty'=>$request->availability

        ]);
        return redirect()->route('product.manage')->with('message','Product create successfully');
    }
    public function product_manage(){
        $products=Product::all();
        $categories=Category::all();
        return view('backend.layouts.product.manageproduct',compact('products','categories'));
    }
    public function productedit($id)

    {

        $products=Product::find($id);
         //dd($customers->all());

        return view('backend.layouts.product.editproduct',compact('products'));

    }
    public function productdelete($id)
    {

        $product=Product::find($id);
        // dd($customer);
        if ($product){
            $product->delete();
            return redirect()->back()->with('message','Product is Deleted');

        }
        return redirect()->back()->with('message','Product is not Deleted');
    }
    public function productupdate (Request $request, $id)
    {
        // dd($request->all());

        $products=Product::find($id);


        $products->update([
            'name'=>$request->name,
            'price'=>$request->price,
            'description'=>$request->description,
            'availabilty'=>$request->availability

        ]);

        return redirect()->route('product.manage')->with('message','Product Information is Updated');

    }

}

