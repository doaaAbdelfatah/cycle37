<?php

namespace App\Http\Controllers;

use App\Models\Cat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    function index()
    {
        $cats = Cat::orderBy("created_at" ,"desc")->paginate(7);
        return view('categories' ,compact('cats'));
    }


    function store(Request $request){
        //validation
        $request->validate([
            'name' => 'required|min:2|max:255',
            'desc' => 'nullable|min:3|max:1000',
        ]);

        //action
        // $request->name
        // $request->desc

        // return DB::insert("insert into cats(name , description ) values(?, ?)" ,
        //  [$request->name , $request->desc]);

        $cat = new Cat();
        $cat->name = $request->name;
        $cat->description = $request->desc;
        $cat->save();

        session()->flash('message' , 'Category created successfully');
        // return redirect('/cats'); // url
        return redirect()->route('cats.index');
        // return redirect()->action([CategoryController::class , 'index']);
    }


}
