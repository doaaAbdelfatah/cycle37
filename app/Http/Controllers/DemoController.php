<?php

namespace App\Http\Controllers;


class DemoController extends Controller
{
    function test($x ,$y){
        // echo "Hello from Demo Controller";
        // return view("demo.test")->with("num1",$x)->with("num2",$y);
        // return view("demo.test")->with(["num1"=>$x , "num2"=>$y]);
        // return view("demo.test" ,["num1"=>$x , "num2"=>$y]);
        return view("demo.test" ,compact("x","y"));
    }

}



