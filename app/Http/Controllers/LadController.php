<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

class LadController extends Controller
{
    // REGISTER METHOD
    public function showLadRegForm()
    {
        return view('lad_register');
    }

    public function lad_register(Request $request)
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

            //send to database
            // $user->save(); // Not necessary as you already created the user with create()

            // Redirect to login page
            return redirect('/show_lad_login')->with('success', 'User registered successfully.');
        } else {
            // Redirect back with validation errors
            return redirect('/lad_register')->withErrors($validated)->withInput();
        }
    }

    // LOGIN METHOD
    public function showLadLoginForm()
    {
        return view('lad_login');
    }

    public function LadLoginForm(Request $request)
    {
        // Validation logic
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        // Attempt to log in the user
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            // Authentication successful, redirect to the intended page or a default page
            return redirect('/lad_home')->with('success', 'User login successfully.');

        }

        // Authentication failed, redirect back with an error message
        return redirect()->back()->withInput($request->only('email'))->withErrors(['email' => 'Invalid credentials']);
    }

    public function showLadDashboard()
    {
        return view('lad_home');
    }
}


