<?php

namespace App\Http\Controllers;

use \Exception;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;

class LadController extends Controller
{
    // REGISTER METHOD
    public function showLadRegForm()
    {
        return view('lad/lad_register');
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

            return redirect('/show_lad_login')->with('success', 'User registered successfully.');
        } else {
            return redirect('/lad_register')->withErrors($validated)->withInput();
        }
    }

    // LOGIN METHOD
    public function showLadLoginForm()
    {
        return view('lad/lad_login');
    }

    public function LadLoginForm(Request $request)
    {
        // Validation
        $validatedData = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        try {
            $user = User::where('email', $validatedData['email'])->first();

            if ($user && Hash::check($validatedData['password'], $user->password)) {
                return redirect()->route('lad_home')->with('success', 'User login successfully.');
            } else {
                return redirect()->route('lad_login')->with('error', 'Either email or password is incorrect.');
            }

        } catch (\Exception $e) {
            return response()->view('errors.500', [], 500);
        }
    }

    public function showLadDashboard()
    {
        return view('lad/lad_home');
    }
}


