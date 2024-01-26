<?php

use App\Http\Controllers\LadController;

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});
