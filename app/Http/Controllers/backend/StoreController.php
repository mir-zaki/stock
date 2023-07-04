<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function store(){
        $title='Dashboard';
        return view('backend.layouts.store',compact ('title'));
    }
}
