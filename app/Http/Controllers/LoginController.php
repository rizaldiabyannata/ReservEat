<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function auth(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'email' => ['required', 'email', 'email:dns'],
            'password' => ['required']
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            $user = User::where('email', $credentials['email'])->first();

            if ($user && $user->role === 'admin') {
                return redirect()->intended('/admin/dashboard');
            } elseif ($user && $user->role === 'restaurant') {
                return redirect()->intended('/restaurant/dashboard');
            } else {
                return redirect()->intended('/');
            }
        }

        return back();
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
