<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    // METHOD TO FETCH ALL USERS FROM DATABASE
    public function user(){
        $data = user::all();

        return view('admin.users', compact('data'));
    }

    // DELETE USER METHOD USING FORM(POST)
    public function destroy($id){
        $user = User::find($id);
        if($user){
            $user = User::destroy($id);
            return redirect()->back()->with('success', 'User deleted successfully');
        }else{
            return redirect()->back()->with('error', 'User not found');
        }
    }

    //DELETE USER METHOD USING GET
    public function deleteuser($id){
        $data = User::find($id);
        if($data){
            $data->delete();
            return redirect()->back()->with('success', 'User deleted successfully');
            //return redirect()->route('admin.users')->with('success', 'User deleted successfully');
        }else{
            // Handle the case where the user doesn't exist
            return redirect()->back()->with('error', 'User not found');
            //return redirect()->route('admin.users')->with('error', 'User not found');
        }
        //dd($data);
    }

}
