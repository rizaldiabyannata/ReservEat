<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use App\Models\Reviews;
use Illuminate\Http\Request;

class AdminRestaurantController extends Controller
{
    public function index()
    {
        $restaurants = Restaurant::all();
        $restaurantsWithRatings = [];
        foreach ($restaurants as $restaurant) {
            $avg_rating = Reviews::where('restaurant_id', $restaurant->id)
                ->avg('rating');
            $restaurant->average_rating = $avg_rating;
            $restaurantsWithRatings[] = $restaurant;
        }
        return view('admin.restaurants', compact('restaurantsWithRatings'));
    }
    public function getRestaurants()
    {

        $restaurants = Restaurant::all();
        return response()->json($restaurants);
    }

    public function addRestaurant()
    {
        return view('admin.addrestaurant');
    }

    public function editRestaurant()
    {
        $restaurants = Restaurant::all();
        return view('admin.editrestaurant', compact('restaurants'));
    }
}
