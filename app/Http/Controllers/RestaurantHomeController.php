<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RestaurantHomeController extends Controller
{
    public function index()
    {
        return view('restaurant.home');
    }
}
