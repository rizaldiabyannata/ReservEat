<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class AdminUserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.page.users', compact('users'));
    }

    public function store(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8',
            'phone' => 'required',
            'role' => 'required'
        ]);

        $data['password'] = Hash::make($data['password']); // Menambahkan hash pada password menggunakan fungsi yang disediakan Laravel

        $user = User::create($data);

        return redirect('/admin/users')->with('success', 'User created successfully');
    }

    public function destroy($id): RedirectResponse
    {
        $user = User::find($id);

        if (!$user) {
            return redirect('/admin/users')->with('error', 'User not found');
        }

        $user->delete();
        return redirect('/admin/users')->with('success', 'User deleted successfully');
    }

    public function addUser()
    {
        return view('admin.page.adduser');
    }

    public function editUser()
    {
        $users = User::all();
        return view('admin.page.edituser', compact('users'));
    }
}
