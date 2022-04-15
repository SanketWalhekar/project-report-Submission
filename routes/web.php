<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\projectcontroller;
use App\Http\controllers\showcontroller;

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
Route::view("project",'report');
// Route::view("new",'new');
// Route::POST('upload',[projectcontroller::class,'index']);
Route::POST("project",[projectcontroller::class,'addData']);
Route::get("data",[showcontroller::class,'show']);
Route::view("show",'show');



