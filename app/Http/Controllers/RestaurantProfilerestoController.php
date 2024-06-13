<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RestaurantProfilerestoController extends Controller
{
    public function profileresto()
    {
        $user = Auth::user();
        if ($user->role == 'restaurant') {
            $restaurant = Restaurant::where('user_id', $user->id)->first();
        }
        return view('restaurant.profileresto', compact('restaurant', 'user'));
    }
}
