<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Models\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RestaurantPesananController extends Controller
{

    public function Pesanan()
    {
        $user = Auth::user();
        $restaurant = Restaurant::where('user_id', $user->id)->first();
        $reservations = Reservation::join('users', 'reservations.user_id', '=', 'users.id')
            ->join('restaurants', 'reservations.restaurant_id', '=', 'restaurants.id')
            ->where('reservations.restaurant_id', $restaurant->id)
            ->select('reservations.*', 'users.name as user_name', 'restaurants.name as restaurant_name', 'users.email as user_email')
            ->get();
        return view('restaurant.Pesanan', compact('reservations'));
    }
}
