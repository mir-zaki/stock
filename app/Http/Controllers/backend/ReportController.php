<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Purchase;
use App\Models\Purchasedetails;
use App\Models\Sale;
use App\Models\Saledetails;

use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function purchase_report(Request $request){
       //dd($request->all());
       if($request->from_date){
        $purchasehistories=Purchase::where('purchase_date',$request->from_date)->orderBy('id','desc')->get();
    }

    else{
        $purchasehistories=Purchase::orderBy('id','desc')->get();
    }

      //dd($purchasehistories->all());

   
        return view('backend.layouts.reports.purchasereport',compact('purchasehistories'));

    }

    public function sales_report(Request $request){
        if($request->from_date){
            $sales=Sale::where('sale_date',$request->from_date)->orderBy('id','desc')->get();
        }
    
        else{
            $sales=Sale::orderBy('id','desc')->get();
        }
        return view('backend.layouts.reports.salesreport',compact('sales'));

    }
    
}
