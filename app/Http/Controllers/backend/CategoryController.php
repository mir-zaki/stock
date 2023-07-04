<?php

namespace App\Http\Controllers\backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;


class CategoryController extends Controller
{
    public function list(){
        $category=Category::all();
        return view('backend.layouts.category.category-list',compact('category'));
    }

    public function add(Request $request){


        $request->validate([
            'name'=>'required',
           'details'=>'required',
            
        ]);

        Category::create([
            // name for db field || name for form fields
            'name'=> $request->name,
            'details'=>$request->details

        ]);
        return redirect()->back();
    }
    public function categoryedit($id)

    {

        $categories=Category::find($id);
         //dd($customers->all());

        return view('backend.layouts.category.editcategory',compact('categories'));

    }
    public function categorydelete($id)
    {

        $category=Category::find($id);
        // dd($customer);
        if ($category){
            $category->delete();
            return redirect()->back()->with('message','Category is Deleted');

        }
        return redirect()->back()->with('message','Category is not Deleted');
    }
    public function categoryupdate (Request $request, $id)
    {
        // dd($request->all());

        $categories=Category::find($id);


        $categories->update([
            'name'=> $request->name,
            'details'=>$request->details



        ]);

        return redirect()->route('category.list')->with('message','Category Information is Updated');

    }

}
