<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'phone' => 'required|unique:users|min:5|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|max:255',
            'confirm-password' => 'required|same:password'
        ]);
    }
}
