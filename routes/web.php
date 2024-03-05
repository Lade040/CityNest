<?php

// use App\Http\Controllers\HomeController;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;



Route::get('/', [HomeController::class, "index"])->name('index');

Route::get('/redirects', [HomeController::class, "redirects"])->name('redirects');

// FETCH USER ROUTE
Route::get('/users', [AdminController::class, "user"]);

//DELETE USER ROUTE USING GET
Route::get('/deleteuser/{id}', [AdminController::class, "deleteuser"])->name('deleteuser');

//DELETE USER ROUTE USING A FORM
Route::delete('/deleteuser/{id}', [AdminController::class, 'destroy'])->name('deleteuser');


// Route::get('/', function () { return view('index'); })->name('index');

Route::get('/login', function (){ return view('login'); })->name('login');

Route::get('/register', function (){ return view('register'); })->name('register');

Route::get('/user',function(){ return view('user_form'); })->name('user');

Route::get('/agent-list',function(){ return view('agent_list'); })->name('agent-list');

Route::get('/shortlet', function(){ return view('shortlet'); })->name('shortlet');

Route::get('/userdash', function(){ return view('user_dash'); })->name('user_dash');

Route::get('/userprofile', function(){ return view('user_profile'); })->name('user_profile');

Route::get('/landlorddash', function(){ return view('landlord_dash'); })->name('landlord_dash');

Route::get('/layout', function(){  return view('layouts/other_dashboard'); })->name('layout');

Route::get('/profile', function(){ return view('profile'); })->name('profile');

Route::get('/teammembers', function(){ return view('team_members'); })->name('team_members');

Route::get('/editteam', function(){ return view('edit_team'); })->name('edit_team');
