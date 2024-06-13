<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Exception;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function auth(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        if (Auth::attempt($credentials)) {
            $user = User::where('email', $credentials['email'])->first();

            if ($user && $user->role === 'admin') {
                return redirect('/admin/dashboard');
            } elseif ($user && $user->role === 'restaurant') {
                return redirect('/restaurantadmin/dashboard');
            } else {
                notify()->success('Selamat Datang');
                return redirect('/home');
            }
        }
        notify()->warning('Gagal Login');
        return back();
    }



    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();
        return redirect('/login');
    }
}
