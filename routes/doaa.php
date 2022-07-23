<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/xxx/{id?}/{name?}' , function(){
    return view('demo.test');
})->where("name" , "[0-9]+");

Route::get('/test/{id?}/{name?}' , function(){
    return view('demo.test');
})->where("name" , "[0-9]+");



Route::get('/add/{x}/{y?}' , function($x ,$z=0){
    return $x+$z;
})->where("x" , "[0-9]+")->where("y" , "[0-9]+");

Route::get('/sum/{x}/{y}/{z?}' , function(Request $request){
    return $request->x+ $request->y +$request->z;
})->where(['x'=> '[0-9]+' , 'y'=> '[0-9]+' , 'z'=> '[0-9]*']);


