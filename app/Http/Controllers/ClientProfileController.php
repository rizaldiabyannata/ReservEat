<?php

namespace App\Http\Controllers;

use App\Models\User;
use Dotenv\Exception\ValidationException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ClientProfileController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('profile', compact('user'));
    }

    public function editprofile()
    {
        $user = Auth::user();
        return view('editProfile', compact('user'));
    }
    public function reservation()
    {
        $user = Auth::user();
        return view('reservationOrder', compact('user'));
    }

    public function history()
    {
        return view('history');
    }

    public function updateProfile(Request $request)
    {
        $id = Auth::user()->id;
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|max:20',
        ]);

        try {
            $user = User::find($id);

            if (!$user) {
                return redirect()->back()->with('error', 'User not found');
            }

            if ($request->has('password') && $request->input('password') !== '') {
                if ($request->has('confirm_password') && $request->input('password') == $request->input('confirm_password')) {
                    $data['password'] = Hash::make($request->input('password'));
                }
            }

            if ($request->hasFile('photo')) {
                $file = $request->file('photo');
                $fileName = time() . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('assets/profiles'), $fileName);
                $data['photo'] = $fileName;
            }
            $user->update($data);
            notify()->success('Berhasil Update ' . $data['name']);
            return redirect('/profile')->with('success', 'User updated successfully');
        } catch (ValidationException $e) {
            notify()->warning('Gagal Update ' . $data['name']);
            return redirect()->back()->with($e);
        }
    }
}
