<?php

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
    return view('index');
})->name('index');

Route::get('/login', function (){
    return view('login');
})->name('login');
Route::get('/register', function (){
    return view('register');
})->name('register');
Route::get('/user',function(){
    return view('user_form');
})->name('user');;
Route::get('/agent-list',function(){
    return view('agent_list');
})->name('agent-list');
Route::get('/shortlet', function(){
    return view('shortlet');
})->name('shortlet');
Route::get('/userdash', function(){
    return view('user_dash');
})->name('user_dash');
Route::get('/userprofile', function(){
    return view('user_profile');
})->name('user_profile');
Route::get('/landlorddash', function(){
    return view('landlord_dash');
})->name('landlord_dash');
Route::get('/layout', function(){
    return view('layouts/other_dashboard');
})->name('layout');