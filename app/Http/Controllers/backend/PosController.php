<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Pos;
use App\Models\Saledetails;
use App\Models\Sale;
use App\Models\Stock;
use App\Models\Customer;


class PosController extends Controller
{
    public function Point_of_Sale(){
        $products=Stock::all();
        $customers=Customer::all();
        
        return view('backend.layouts.sale.pos',compact('products','customers'));
    }
    public function Sales(){
        $sales=Sale::all();
        $customers=Customer::all();
        return view('backend.layouts.sale.sales',compact('sales','customers'));

    }
    public function details($id){
        
       
        $details=Saledetails::where('sale_id',$id)->get();
        
       
        return view('backend.layouts.sale.saledetails',compact('details'));
     }

    public function cart(Request $request)
    {
       
        


        $product = Product::find($request->name);

        



        if(!$product) {


            abort(404);

        }


        $cart = session()->get('cart');
        
        
        $stock=Stock::where('product_id',$product->id)->first();

        if($stock->quantity < $request->quantity){

            return redirect()->back()->with('message',' Requested Product Quantity is Low');
        }

        // if cart is empty then this the first product
        if(!$cart) {

            $cart = [
                    $product->id  => [
                        'product_id' => $product->id,
                        "name" => $product->name,
                        "price" => $product->price,
                        "qty" => $request->quantity,
                        'sub_total' =>$product->price * $request->quantity
                    ]
                    

            ];

            session()->put('cart', $cart);

             

            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }


        if(isset($cart[$product->id])) {



            $cart[$product->id]['qty']= $cart[$product->id]['qty']+$request->qty;

            session()->put('cart', $cart);

            return redirect()->back()->with('success', 'Product added to cart successfully!');

        }


        $cart[$product->id] = [
                        'product_id' => $product->id,
                        "name" => $product->name,
                        "price" => $product->price,
                        "qty" => $request->quantity,
                        'sub_total' =>$product->price * $request->quantity
        ];

        session()->put('cart', $cart);
        //dd($carts);



        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }
    public function sale_list ($id)
    {

        
        $salelist=Saledetails::where('sale_id',$id)->get();


        return view('backend.layouts.sale.salelist',compact('salelist','id'));



    }




    public function forget (Request $request)
   
   
    {
        if(session()->has('cart'))
        {
            $request->session()->forget('cart');
            return redirect()->back();
        }

return redirect()->back();

    }




     public function cart_post( Request $request){

       //$request->session()->flash('cart');
        $carts=session()->get('cart');
        //dd($carts);
        $total=array_sum(array_column($carts,'sub_total'));

        $saleid=Sale::create([
            'sale_date'=>$request->sale_date,
            'customer_id'=>$request->name,
            'total_price'=>$total,
            'sale_by'=>auth()->user()->id,

        ]);


        $carts=session()->get('cart');



            foreach ($carts as $cart){

          $details =  Saledetails::create([
                'sale_id' => $saleid->id,
                'product_id' => $cart['product_id'],
                'qty' => $cart['qty'],
                'sale_price' => $cart['price'],
                'sub_total' => $cart['price'] * $cart['qty'],
            ]);


            $stock=Stock::where('product_id',$cart['product_id'])->first();

//dd($stock);

if($stock)
{
    $stock->update([
        'quantity' =>$stock->quantity - $cart['qty']
    ]);

}
else
{

    Stock::create([

        'product_id'=>$cart['product_id'],
        'quantity'=> $cart['qty'],

    ]);
}



    }
    $request->session()->forget('cart');
    return redirect()->route('sale_list',$saleid);
//return redirect()->route('sales');


}
}
