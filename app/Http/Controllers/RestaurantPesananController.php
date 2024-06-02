<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RestaurantPesananController extends Controller
{
    public function index(){

    }
    public function addMenu(){
   
    }

    public function Pesanan(){
        return view('restaurant.Pesanan');
    }
}