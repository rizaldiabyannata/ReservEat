<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminHomeController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.home', compact('users'));
    }

    public function getSessionData()
    {
        $authUser = Auth::user();
        return response()->json($authUser);
    }
}
