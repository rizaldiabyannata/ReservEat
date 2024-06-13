<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Reservation;
use App\Models\Restaurant;
use App\Models\Reviews;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RestaurantHomeController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $restaurant = Restaurant::where('user_id', $user->id)->first();
        $reservations = Reservation::join('users', 'reservations.user_id', '=', 'users.id')
            ->join('restaurants', 'reservations.restaurant_id', '=', 'restaurants.id')
            ->where('reservations.restaurant_id', $restaurant->id)
            ->select('reservations.*', 'users.name as user_name', 'restaurants.name as restaurant_name', 'users.email as user_email')
            ->get();
        $menus = Menu::where('restaurant_id', $restaurant->id)->get();
        $reviews = Reviews::with('user')
            ->where('restaurant_id', $restaurant->id)
            ->get();
        return view('restaurant.home', compact('reservations', 'menus', 'reviews'));
    }
}
