<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LadController extends Controller
{
    // METHOD TO FETCH ALL USERS FROM DATABASE
    public function user(){
        $data = user::all();
        return view('admin.users', compact('data'));
    }

    
}
