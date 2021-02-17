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
    return view('layouts.index');
});

Route::get('/about', function(){
    return view('layouts.about');
});

Route::get('/services', function(){
    return view('layouts.services');
});

Route::get('/team', function(){
    return view('layouts.team');
});


Route::get('/connect', function(){
    return view('layouts.connect');
});
