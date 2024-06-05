<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use Illuminate\Validation\ValidationException;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register');
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'phone' => 'required|string|max:20',
            'password' => 'required|string|min:8|confirmed',
            'password_confirmation' => 'required|string|min:8',
        ]);

        try {
            $user = User::create([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'phone' => $request->input('phone'),
                'password' => Hash::make($request->input('password')),
                'role' => 'customer', // set the role to customer
            ]);
            notify()->success('Register Berhasil!');
            return redirect('/login')->with('success', 'You have successfully registered!');
        } catch (\Exception $e) {
            return back()->withErrors(['register' => 'Failed to register. Please try again.'])->withInput();
        }
    }
}
