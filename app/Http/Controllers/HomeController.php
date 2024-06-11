<?php

namespace App\Http\Controllers;
use App\Models\ReservationOrder;


use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }
    public function category()
    {
        return view('category');
    }

    public function restaurant()
    {
        return view('restaurant');
    }
    public function reservation()
    {
        return view('reservation');
    }

    public function restaurantDetails()
    {
        return view('restaurantDetails');
    }
}
