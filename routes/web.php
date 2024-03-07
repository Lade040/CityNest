<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LadController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, "index"])->name('index');

Route::get('/redirects', [HomeController::class, "redirects"])->name('redirects');


// Route::get('/about', function(){ return 'about'; })->name('index');

Route::get('/register', function(){ return view('register'); })->name('register');

Route::post('/show-user-login-form', [HomeController::class, "ShowUserLoginForm"])->name('show-user-login-form');

Route::post('/user-login', [HomeController::class, "UserLogin"])->name('user-login');

Route::get('/show-user-reg-form', [HomeController::class, "ShowUserRegForm"])->name('show-user-reg-form');

Route::post('/user-register', [HomeController::class, "UserRegister"])->name('user-register');

Route::post('/user-dashboard', [HomeController::class, "ShowUserDashboard"])->name('user-dashboard');

Route::get('/user', function(){ return view('user'); })->name('user');

Route::get('/agent-list', function(){ return view('agent_list'); })->name('agent-list');

Route::get('/show_lad_register', [LadController::class, 'showLadRegForm'])->name('show_lad_register');

Route::post('/lad_register', [LadController::class, 'lad_register'])->name('lad_register');

Route::get('/show_lad_login', [LadController::class, 'showLadLoginForm'])->name('show_lad_login');

Route::post('/lad_login', [LadController::class, 'LadLoginForm'])->name('lad_login');

Route::post('/lad_home', [LadController::class, 'showLadDashboard'])->name('lad_home');


// routes/web.php
Route::post('/logout', 'Auth\LoginController@logout')->name('logout');


Route::get('/show_admin_register', [AdminController::class, 'showAdminRegForm'])->name('show_admin_register');

Route::post('/admin_register', [AdminController::class, 'AdminRegister'])->name('admin_register');

Route::get('/show_admin_login', [AdminController::class, 'showAdminLoginForm'])->name('show_admin_login');

Route::post('/admin_login', [AdminController::class, 'AdminLoginForm'])->name('admin_login');

Route::post('/admin_dashboard', [LadController::class, 'showAdminDashboard'])->name('admin_dashboard');

Route::get('/users', [AdminController::class, "user"]);

//DELETE ROUTE USING GET
Route::get('/deleteuser/{id}', [AdminController::class, "deleteuser"])->name('deleteuser');

//DELETE ROUTE USING A FORM
Route::delete('/deleteuser/{id}', [AdminController::class, 'destroy'])->name('deleteuser');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
