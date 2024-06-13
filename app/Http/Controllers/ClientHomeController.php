<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use Illuminate\Http\Request;

class ClientHomeController extends Controller
{
    public function index()
    {
        $restaurants = Restaurant::inRandomOrder()->take(3)->get();
        return view('home', compact('restaurants'));
    }
}
