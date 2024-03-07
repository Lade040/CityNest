<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{

    public function showAdminRegForm()
    {
        return view('admin/admin-register');
    }

    public function AdminRegister(Request $request)
    {
        // Validation logic
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required|string|min:8',
        ]);

        if ($validated) {
            User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => bcrypt($request->password),
            ]);

            return redirect('/show_admin_login')->with('success', 'User registered successfully.');
        } else {
            return redirect('/admin_register')->withErrors($validated)->withInput();
        }
    }

    // LOGIN METHOD
    public function showAdminLoginForm()
    {
        return view('admin/admin_login');
    }

    public function AdminLoginForm(Request $request)
    {
        // Validation
        $validatedData = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        try {
            $user = User::where('email', $validatedData['email'])->first();

            if ($user && Hash::check($validatedData['password'], $user->password)) {
                return redirect()->route('admin_dashboard')->with('success', 'User login successfully.');
            } else {
                return redirect()->route('admin_login')->with('error', 'Either email or password is incorrect.');
            }

        } catch (\Exception $e) {
            return response()->view('errors.500', [], 500);
        }
    }

    public function showAdminDashboard()
    {
        return view('admin/admin_dashboard');
    }


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
