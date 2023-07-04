<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Login;
use Illuminate\Support\Facades\Auth;
use Laravel\Ui\Presets\React;

class LoginController extends Controller
{
    public function login ()
    {

        return view('backend.layouts.login');
    }

    public function login_user ( Request $request)
    {

        //dd($request->all());
        $req=$request->except('_token');
        //dd(Auth::attempt($req));
        if(Auth::attempt($req)){
            if(auth()->user()->type=='admin'){
                return redirect()->route('dashboard');
            }
            elseif(auth()->user()->type=='manager'){
                return redirect()->route('pos');
            }
            elseif(auth()->user()->type=='seller'){
                return redirect()->route('pos');
            }
            else{
                Auth::logout();
            }

        }
        return redirect()->back()->with('message','Wrong Password Or User Name.........');
    }

    public function logout ()
    {

        Auth::logout();
        return redirect()->route('login');
    }
}
