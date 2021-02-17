<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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

Route::get('/', function(){
    return view('welcome');
});


Route::get('/home', function(){
    return view('index');
});

Route::get('/about', function(){
    return view('about');
});

Route::get('/services', function(){
    return view('services');
});

Route::get('/team', function(){
    return view('team');
});


Route::get('/connect', function(){
    return view('connect');
});


//pizzas
Route::get('/pizzas',function(){
    $pizzas = [
        ['type'=>'mangolin',
              'base'=>'cheese',
              'price'=>2],
              ['type'=>'italian',
              'base'=>'spicy',
              'price'=>5]
];
$name = request('name');
    return view('pizzas',['pizzas'=>$pizzas,'name' => $name]);
});