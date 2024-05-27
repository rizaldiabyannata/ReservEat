<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminProfileController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('admin.page.profile', compact('user'));
    }

    public function editProfile()
    {
        $user = Auth::user();
        return view('admin.page.editprofile', compact('user'));
    }
}
