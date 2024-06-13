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
        $authUser = Auth::user();
        return view('admin.home', compact('users', 'authUser'));
    }

    public function getSessionData()
    {
        $authUser = Auth::user();
        return view('components.admin-nav', compact('authUser'));
    }
    public function getSessionDataAPI()
    {
        $authUser = Auth::user();
        return response()->json($authUser);
    }
}
