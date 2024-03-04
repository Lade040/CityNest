<?php

use App\Http\Controllers\LadController;

use Illuminate\Support\Facades\Route;



Route::get('/about', function(){ return 'about'; })->name('index');

Route::get('/', function(){ return view('index'); })->name('index');

Route::get('/login', function(){ return view('login'); })->name('login');

Route::get('/register', function(){ return view('register'); })->name('register');

Route::get('/user', function(){ return view('user'); })->name('user');

Route::get('/agent-list', function(){ return view('agent_list'); })->name('agent-list');

Route::get('/show_lad_register', [LadController::class, 'showLadRegForm'])->name('show_lad_register');

Route::post('/lad_register', [LadController::class, 'lad_register'])->name('lad_register');

Route::get('/show_lad_login', [LadController::class, 'showLadLoginForm'])->name('show_lad_login');

Route::post('/lad_login', [LadController::class, 'LadLoginForm'])->name('lad_login');

Route::get('/lad_home', [LadController::class, 'showLadDashboard'])->name('lad_home');

// routes/web.php
Route::post('/logout', 'Auth\LoginController@logout')->name('logout');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
