<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RestaurantMenuController extends Controller
{
    public function index(){

    }
    public function addMenu(){

        return view('restaurant.formresto');
        
    }
}
