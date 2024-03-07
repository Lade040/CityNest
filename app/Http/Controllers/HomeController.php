<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    public function index(){
        //VALIDATION: if user is signed in, take them to redirects public function
        if(Auth::check()){ // Check if user is authenticated
            return redirect()->route('redirects'); // Use route name instead of URL
        }else{
            return view('index');
        }
    }

    public function redirects(){
        //$user_type = Auth::user()->user_type; // Get user type from authenticated user

        $user = Auth::user();
        if ($user && $user->user_type == 1) {
            return redirect()->route('admin_login');
        } else if ($user && $user->user_type == 0) {
            return redirect()->route('user-login');
        } else {
            return redirect()->route('lad_login');
        }

    }

     // REGISTER METHOD
    public function ShowUserRegForm()
    {
         return view('user/user-reg');
    }
    public function ShowUserDashboard()
    {
         return view('user/user-dashboard');
    }

    public function UserRegister(Request $request)
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

            return redirect()->route('/show-user-login-form')->with('success', 'User registered successfully.');
        } else {
            return redirect('/user-register')->withErrors($validated)->withInput();
        }
    }

    public function ShowUserLoginForm()
    {
        return view('user/user-login');
    }

    public function UserLogin(Request $request)
    {
        // Validation
        $validatedData = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        try {
            $user = User::where('email', $validatedData['email'])->first();

            if ($user && Hash::check($validatedData['password'], $user->password)) {
                return redirect()->route('user-dashboard')->with('success', 'User login successfully.');
            } else {
                return redirect()->route('user-login')->with('error', 'Either email or password is incorrect.');
            }

        } catch (\Exception $e) {
            return response()->view('errors.500', [], 500);
        }
    }
}
