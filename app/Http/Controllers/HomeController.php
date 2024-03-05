<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    //
    public function index(){
         //VALIDATION: if user is signed in, take them to redirects public function
         if(Auth::id()){
            return redirect('redirects');
        }else{

        }
        return view('index');
    }

    public function redirects(){
        $user_type = Auth::user()->user_type;

        if($user_type == 1){
            return view('admin.adminhome');
        }else{
            return view('index');
        }
    }


}
