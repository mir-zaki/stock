<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Product;
use App\Models\Customer;
use App\Models\Supplier;
use App\Models\Purchase;
use App\Models\Sale;


use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard(){


        return view('backend.layouts.admin.dashboard');
    }
}
