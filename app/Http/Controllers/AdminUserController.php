<?php

namespace App\Http\Controllers;

use App\Models\Reviews;
use App\Models\User;

use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class AdminUserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.users', compact('users'));
    }

    public function store(Request $request): RedirectResponse
    {
        try {
            $data = $request->validate([
                'name' => 'required',
                'email' => 'required|email',
                'password' => 'required|min:8',
                'phone' => 'required',
                'role' => 'required'
            ]);

            $data['password'] = Hash::make($data['password']);

            $user = User::create($data);

            return redirect('/admin/users')->with('success', 'User created successfully');
        } catch (ValidationException $e) {
            return redirect()->back()->withInput()->withErrors($e->validator);
        }
    }


    public function destroy($id): RedirectResponse
    {
        $user = User::find($id);

        if (!$user) {
            return redirect('/admin/users')->with('error', 'User not found');
        }

        Reviews::where('user_id', $id)->delete();

        $user->delete();
        return redirect('/admin/users')->with('success', 'User deleted successfully');
    }

    public function addUser()
    {
        return view('admin.adduser');
    }

    public function editUser()
    {
        $users = User::all();
        return view('admin.edituser', compact('users'));
    }

    public function formedit($id)
    {
        $user = User::find($id);

        if (!$user) {
            return redirect('/admin/users')->with('error', 'User not found');
        }

        return view('admin.formedituser', compact('user'));
    }

    public function update(Request $request, $id): RedirectResponse
    {
        try {
            $user = User::find($id);

            if (!$user) {
                return redirect('/admin/users')->with('error', 'User not found');
            }

            $data = $request->validate([
                'name' => 'required',
                'email' => 'required|email',
                'phone' => 'required',
                'role' => 'required'
            ]);

            if ($request->has('password') && $request->input('password') !== '') {
                $data['password'] = Hash::make($request->input('password'));
            }

            $user->update($data);

            return redirect('/admin/users')->with('success', 'User updated successfully');
        } catch (ValidationException $e) {
            return redirect()->back()->withInput()->withErrors($e->validator);
        }
    }
}
