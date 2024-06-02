<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
public function Profile(){
    return view('profile');
}
public function editProfile(){
    return view('editProfile');
}
public function ReservationOrder()
{
    return view('reservationOrder');
}
public function History()
{
    return view('history');
}
}
