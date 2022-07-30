<?php

namespace App\Http\Controllers;

use App\Models\Cat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    function index($id =null)
    {
        if ($id){
            $edit_cat = Cat::find($id);
        }
        else $edit_cat = null;
        $cats = Cat::orderBy("created_at" ,"desc")->paginate(7);
        return view('categories' ,compact('cats'))->with('edit_cat' ,$edit_cat);
    }

    function store(Request $request , $id = null){
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

        if ($id){
            $cat = Cat::find($id);
        }else{
            $cat = new Cat();
        }
        $cat->name = $request->name;
        $cat->description = $request->desc;
        $cat->save();

        session()->flash('message' , 'Category created successfully');
        // return redirect('/cats'); // url
        return redirect()->route('cats.index');
        // return redirect()->action([CategoryController::class , 'index']);
    }

    // function update(Request $re)

    function destroy($id){
        // Cat::destroy($id);
        $cat =Cat::find($id);
        $cat->delete();
        // dump($cat);
        session()->flash('message' , "Category " . $cat->name." deleted successfully");
        // session()->flash('message' , "Category  deleted successfully");
        return redirect()->route('cats.index');
    }

}
