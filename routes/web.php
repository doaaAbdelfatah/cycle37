<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DemoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get("/sum/{x}/{y}" ,[DemoController::class , "test"]);


Route::prefix('admin')->group(function () {
    Route::get("/cats" ,[CategoryController::class , "index"])->name("cats.index");
    Route::post("/cats" ,[CategoryController::class , "store"]);
});


