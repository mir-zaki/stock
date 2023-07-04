<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;

use App\Models\Product;
use App\Models\Category;
use App\Models\Supplier;
use App\Models\Payment;
use App\Models\Purchasedetails;
use App\Models\Purchase;
use App\Models\Stock;

use Illuminate\Http\Request;

class PurchaseController extends Controller
{
    public function addpurchase(){
        
        $products=Product::all();
        $categories=Category::all();
        $suppliers=Supplier::all();
        $purchases=Purchase::all();
       // $purchaseshistory=Purchasehistory::all();
        

        return view('backend.layouts.purchase.addpurchase',compact('products','suppliers','categories','purchases'));
    }
    public function purchasedetails(Request $request){
        //dd($request->all());
        Purchase::create([
            // name for db field || name for form fields
            
            'product_id'=> $request->name,
            'unit_price'=>$request->price,
            'quantity'=>$request->quantity,
            'sub_total'=>$request->price
        ]);
        return redirect()->route('add.purchase');      
    } 
    public function addhistory(){
        
        $suppliers=Supplier::all();
        $products=Product::all();
        $purchases=Purchase::all();

        return view('backend.layouts.purchase.addpurchase',compact('suppliers','products','purchases'));
    }
   
     
      public function manage_purchase(){
        
       
        $purchasehistories=Purchase::all();
        //dd($purchasehistories)->all();
       
        return view('backend.layouts.purchase.managepurchase',compact('purchasehistories'));
     }

     public function details($id){
        
       
        $details=Purchasedetails::where('purchase_id',$id)->get();
        //dd($purchasehistories)->all();
       
        return view('backend.layouts.purchase.purchasedetails',compact('details','id'));
     }
    


     public function cart(Request $request)
     {
 
 
 
         $product = Product::find($request->name);
        
 
         if(!$product) {
 
 
             abort(404);
 
         }
         //dd($purchase->all());
 
         $cart = session()->get('cart');
 
 
         // if cart is empty then this the first product
         if(!$cart) {
 
             $cart = [
                     $product->id => [
                         'purchase_id' => $product->purchase_id,
                         'product_id' => $product->id,
                         "name" => $product->name,
                         "price" => $request->price,
                         "quantity" => $request->quantity,
                         "sub_total"=>$request->price *$request->quantity
                     ]
             ];
 
             session()->put('cart', $cart);
 
 
 
             return redirect()->back()->with('success', 'Product added to cart successfully!');
         }
 
         // if cart not empty then check if this product exist then increment quantity
         if(isset($cart[$product->id])) {
 
             $cart[$product->id]['price']=$request->price;
             $cart[$product->id]['quantity']= $cart[$product->id]['quantity']+$request->quantity;
 
             session()->put('cart', $cart);
 
             return redirect()->back()->with('success', 'Product added to cart successfully!');
 
         }
 
         // if item not exist in cart then add to cart with quantity = 1
         $cart[$product->id] = [
                         'purchase_id' => $product->purchase_id,
                         'product_id' => $product->id,
                         "name" => $product->name,
                         "price" => $request->price,
                         "quantity" => $request->quantity,
                         "sub_total"=>$request->price *$request->quantity
         ];
 
         session()->put('cart', $cart);
 
         return redirect()->back()->with('success', 'Product added to cart successfully!');
     }
     public function purchase_forget (Request $request)
     {
         if(session()->has('cart'))
         {
             $request->session()->forget('cart');
             return redirect()->back();
         }
 
 return redirect()->back();
 
     }
 
     public function purchases_delete($id){
         $purchasedel=Purchase::find($id);
         if($purchasedel){
             $purchasedel->delete();
             return redirect()->back()->with('message','Product is Deleted');
         }
 
     }


     public function cart_post( Request $request){

        //$request->session()->flash('cart');
        $carts=session()->get('cart');

        $total=array_sum(array_column($carts,'sub_total'));

        $saleid=Purchase::create([
            'purchase_date'=>$request->date,
            'supplier_id'=>$request->name,
            'challan_no'=>$request->number,
            'total_price'=>$total,
            'received_by'=>auth()->user()->id

        ]);


        $carts=session()->get('cart');



            foreach ($carts as $cart){

          $details =  Purchasedetails::create([
                'purchase_id' => $saleid->id,
                'product_id' => $cart['product_id'],
                'qty' => $cart['quantity'],
                'unit_price' => $cart['price'],
                'sub_total' => $cart['price'] * $cart['quantity'],
            ]);


            $stock=Stock::where('product_id',$cart['product_id'])->first();

//dd($stock);

if($stock)
{
    $stock->update([
        'quantity' =>$stock->quantity + $cart['quantity']
    ]);

}
else
{

    Stock::create([

        'product_id'=>$cart['product_id'],
        'quantity'=> $cart['quantity'],

    ]);
}



    }
    $request->session()->forget('cart');
return redirect()->route('manage.purchases',$saleid);


}


   
    }
