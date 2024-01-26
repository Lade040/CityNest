<?php

use App\Http\Controllers\LadController;

use Illuminate\Support\Facades\Route;



Route::get('/', function () { return view('index'); })->name('index');

Route::get('/login', function (){ return view('login');})->name('login');

Route::get('/register', function (){ return view('register');})->name('register');

Route::get('/user',function(){ return view('user_form');})->name('user');

Route::get('/agent-list',function(){ return view('agent_list');})->name('agent-list');
