<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminOrderController extends Controller
{
    public function index()
    {
        $orders = Reservation::join('restaurants', 'reservations.restaurant_id', '=', 'restaurants.id')
            ->join('users', 'reservations.user_id', '=', 'users.id')
            ->select('reservations.*', 'restaurants.name as restaurant_name', 'users.name as user_name')
            ->get();
        $reservationsToday = Reservation::first()->reservations_today;
        $authUser = Auth::user();
        return view('admin.orders', compact('orders', 'reservationsToday', 'authUser'));
    }
}
