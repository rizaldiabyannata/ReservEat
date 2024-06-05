<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientRestaurantsController extends Controller
{
    public function index()
    {
        return view('restaurant');
    }

    public function detail()
    {
        return view('restaurantDetails');
    }

    public function menu()
    {
        return view('menu');
    }
}
