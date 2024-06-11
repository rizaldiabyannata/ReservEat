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
        try {
            $request->validate([
                'name' => 'required',
                'email' => 'required|email',
                'password' => 'required|min:8|confirmed',
                'password_confirmation' => 'required',
                'phone' => 'required',
                'gender' => 'nullable',
                'photo' => 'nullable',
            ]);

            $user = new User();
            $user->name = $request->input('name');
            $user->email = $request->input('email');
            $user->password = Hash::make($request->input('password'));
            $user->phone = $request->input('phone');
            $user->role = 'customer';

            if ($request->has('gender')) {
                $user->gender = $request->input('gender');
            }

            if ($request->hasFile('photo')) {
                $file = $request->file('photo');
                $filename = 'default-avatar.jpg';

                if ($request->input('gender') === 'male') {
                    $filename = 'forMale.jpg';
                } elseif ($request->input('gender') === 'female') {
                    $filename = 'forFemale.jpg';
                }

                $user->photo = $filename;
            } else {
                $user->photo = 'default-avatar.jpg';
            }

            $user->save();

            notify()->success('Selamat Datang ' . $user->name);
            auth()->login($user);
            return redirect('/home')->with('success', 'User registered');
        } catch (ValidationException $e) {
            notify()->warning('Gagal Register');
            return redirect()->back()->withInput()->withErrors($e->validator);
        } catch (\Exception $e) {
            notify()->error('Error registering user: ' . $e->getMessage());
            return redirect()->back()->withInput();
        }
    }
}
