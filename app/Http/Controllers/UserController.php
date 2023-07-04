<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function adduser(){
        return view('backend.layouts.users.adduser');
    }
    public function user_manage(){
        $users=User::all();

        return view('backend.layouts.users.manageuser',compact('users'));
    }
    public function useredit($id)

    {

        $users=User::find($id);
         //dd($customers->all());

        return view('backend.layouts.users.edituser',compact('users'));

    }

    public function postuser(Request $request){



        $request->validate([
            

           'phone'=>'required|numeric|digits:11',

           'password'=>'required',

        ]);



        User::create([

            'username'=>$request->name,
            'fullname'=>$request->fullname,
            'type'=>$request->designation,
            'phone'=>$request->phone,
            'password'=>bcrypt($request->password)


        ]);
        return redirect()->route('user.manage');
    }
    public function userdelete($id)
    {

        $user=User::find($id);
        // dd($customer);
        if ($user){
            $user->delete();
            return redirect()->back()->with('message','User is Deleted');

        }
        return redirect()->back()->with('message','User is not Deleted');
    }
    public function userupdate (Request $request, $id)
    {
        // dd($request->all());

        $users=User::find($id);


        $users->update([

            'fullname'=>$request->fullname,
             'phone'=>$request->phone,


        ]);

        return redirect()->route('user.manage')->with('message','UserInformation is Updated');

    }


}
