<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        // Validate form inputs
        $request->validate([
            'name' => 'required|string|max:30',
            'email' => 'required|email|unique:users,email',
            'phone_number' => 'required|digits:10|unique:users,phone_number',
            'password' => 'required|min:6',
        ]);

        // Create user in database
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'password' => Hash::make($request->password), // Hash the password
        ]);

        return redirect()->route('signup')->with('success', 'Registration successful!');
    }
}

