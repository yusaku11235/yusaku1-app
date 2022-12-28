<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Tweet\IndexController;


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

Route::post('/index',function(){
    return view('/tweet/index');
});

Route::get('/index',function(){
    return view('/tweet/index');
});

Route::post('/result',[IndexController::class,'index']);
