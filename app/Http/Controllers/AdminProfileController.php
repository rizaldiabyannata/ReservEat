<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AdminProfileController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $authUser = Auth::user();
        return view('admin.profile', compact('user', 'authUser'));
    }

    public function editProfile($id)
    {
        $user = User::find($id);
        $authUser = Auth::user();
        return view('admin.editprofile', compact('user', 'authUser'));
    }

    public function updateProfile(Request $request, $id)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|max:20',
            'role' => 'required',
        ]);

        try {
            $user = User::find($id);

            if (!$user) {
                return redirect('/admin/myprofile')->with('error', 'User not found');
            }

            if ($request->has('password') && $request->input('password') !== '') {
                $data['password'] = Hash::make($request->input('password'));
            }

            if ($request->hasFile('photo')) {
                $file = $request->file('photo');
                $fileName = time() . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('assets/profiles'), $fileName);
                $data['photo'] = $fileName;
            }
            $user->update($data);
            notify()->success('Berhasil Update ' . $data['name']);
            return redirect('/admin/myprofile')->with('success', 'User updated successfully');
        } catch (ValidationException $e) {
            notify()->warning('Gagal Update ' . $data['name'] . " Karena " . $e);
            return redirect()->back()->with($e->validator);
        }
    }
}
