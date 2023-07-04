<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Purchase;
use App\Models\Stock;
use Illuminate\Http\Request;

class StockController extends Controller
{
    public function store(){
        $stocks=Stock::all();
        $products=Product::all();
        $purchases=Purchase::all();
        
        return view('backend.layouts.stocks.managestock',compact('stocks','products','purchases'));
    }
}
