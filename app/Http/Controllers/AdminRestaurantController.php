<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminRestaurantController extends Controller
{
    public function index()
    {
        $restaurants = [
            [
                'name' => 'The Grill House',
                'address' => 'Jalan Sudirman 123',
                'phone' => '081234567890',
                'rating' => 4.2,
                'reservations_today' => 8
            ],
            [
                'name' => 'Bistro 51',
                'address' => 'Jalan Sudirman 456',
                'phone' => '082345678901',
                'rating' => 4.6,
                'reservations_today' => 3
            ],
            [
                'name' => 'The Italian Kitchen',
                'address' => 'Jalan Sudirman 789',
                'phone' => '083456789012',
                'rating' => 4.8,
                'reservations_today' => 12
            ],
            [
                'name' => 'Seafood Heaven',
                'address' => 'Jalan Sudirman 234',
                'phone' => '084567890123',
                'rating' => 4.3,
                'reservations_today' => 6
            ],
            [
                'name' => 'The Chinese Restaurant',
                'address' => 'Jalan Sudirman 567',
                'phone' => '085678901234',
                'rating' => 4.1,
                'reservations_today' => 9
            ],
            [
                'name' => 'The Sushi Place',
                'address' => 'Jalan Sudirman 890',
                'phone' => '086789012345',
                'rating' => 4.7,
                'reservations_today' => 4
            ],
            [
                'name' => 'The Steak House',
                'address' => 'Jalan Sudirman 345',
                'phone' => '087890123456',
                'rating' => 4.5,
                'reservations_today' => 10
            ],
            [
                'name' => 'The Indian Cafe',
                'address' => 'Jalan Sudirman 678',
                'phone' => '088901234567',
                'rating' => 4.4,
                'reservations_today' => 7
            ],
            [
                'name' => 'The Coffee Shop',
                'address' => 'Jalan Sudirman 901',
                'phone' => '089012345678',
                'rating' => 4.2,
                'reservations_today' => 5
            ],
            [
                'name' => 'The Korean BBQ',
                'address' => 'Jalan Sudirman 456',
                'phone' => '090123456789',
                'rating' => 4.6,
                'reservations_today' => 11
            ]
        ];

        return view('admin.page.restaurants', compact('restaurants'));
    }
    public function getRestaurants()
    {
        $restaurants = [
            [
                'name' => 'The Grill House',
                'address' => 'Jalan Sudirman 123',
                'phone' => '081234567890',
                'rating' => 4.2,
                'reservations_today' => 8
            ],
            [
                'name' => 'Bistro 51',
                'address' => 'Jalan Sudirman 456',
                'phone' => '082345678901',
                'rating' => 4.6,
                'reservations_today' => 3
            ],
            [
                'name' => 'The Italian Kitchen',
                'address' => 'Jalan Sudirman 789',
                'phone' => '083456789012',
                'rating' => 4.8,
                'reservations_today' => 12
            ],
            [
                'name' => 'Seafood Heaven',
                'address' => 'Jalan Sudirman 234',
                'phone' => '084567890123',
                'rating' => 4.3,
                'reservations_today' => 6
            ],
            [
                'name' => 'The Chinese Restaurant',
                'address' => 'Jalan Sudirman 567',
                'phone' => '085678901234',
                'rating' => 4.1,
                'reservations_today' => 9
            ],
            [
                'name' => 'The Sushi Place',
                'address' => 'Jalan Sudirman 890',
                'phone' => '086789012345',
                'rating' => 4.7,
                'reservations_today' => 4
            ],
            [
                'name' => 'The Steak House',
                'address' => 'Jalan Sudirman 345',
                'phone' => '087890123456',
                'rating' => 4.5,
                'reservations_today' => 10
            ],
            [
                'name' => 'The Indian Cafe',
                'address' => 'Jalan Sudirman 678',
                'phone' => '088901234567',
                'rating' => 4.4,
                'reservations_today' => 7
            ],
            [
                'name' => 'The Coffee Shop',
                'address' => 'Jalan Sudirman 901',
                'phone' => '089012345678',
                'rating' => 4.2,
                'reservations_today' => 5
            ],
            [
                'name' => 'The Korean BBQ',
                'address' => 'Jalan Sudirman 456',
                'phone' => '090123456789',
                'rating' => 4.6,
                'reservations_today' => 11
            ]
        ];

        return response()->json($restaurants);
    }

    public function addRestaurant()
    {
        return view('admin.page.addrestaurant');
    }

    public function editRestaurant()
    {
        $restaurants = [
            [
                'name' => 'The Grill House',
                'address' => 'Jalan Sudirman 123',
                'phone' => '081234567890',
                'rating' => 4.2,
                'reservations_today' => 8
            ],
            [
                'name' => 'Bistro 51',
                'address' => 'Jalan Sudirman 456',
                'phone' => '082345678901',
                'rating' => 4.6,
                'reservations_today' => 3
            ],
            [
                'name' => 'The Italian Kitchen',
                'address' => 'Jalan Sudirman 789',
                'phone' => '083456789012',
                'rating' => 4.8,
                'reservations_today' => 12
            ],
            [
                'name' => 'Seafood Heaven',
                'address' => 'Jalan Sudirman 234',
                'phone' => '084567890123',
                'rating' => 4.3,
                'reservations_today' => 6
            ],
            [
                'name' => 'The Chinese Restaurant',
                'address' => 'Jalan Sudirman 567',
                'phone' => '085678901234',
                'rating' => 4.1,
                'reservations_today' => 9
            ],
            [
                'name' => 'The Sushi Place',
                'address' => 'Jalan Sudirman 890',
                'phone' => '086789012345',
                'rating' => 4.7,
                'reservations_today' => 4
            ],
            [
                'name' => 'The Steak House',
                'address' => 'Jalan Sudirman 345',
                'phone' => '087890123456',
                'rating' => 4.5,
                'reservations_today' => 10
            ],
            [
                'name' => 'The Indian Cafe',
                'address' => 'Jalan Sudirman 678',
                'phone' => '088901234567',
                'rating' => 4.4,
                'reservations_today' => 7
            ],
            [
                'name' => 'The Coffee Shop',
                'address' => 'Jalan Sudirman 901',
                'phone' => '089012345678',
                'rating' => 4.2,
                'reservations_today' => 5
            ],
            [
                'name' => 'The Korean BBQ',
                'address' => 'Jalan Sudirman 456',
                'phone' => '090123456789',
                'rating' => 4.6,
                'reservations_today' => 11
            ]
        ];
        return view('admin.page.editrestaurant', compact('restaurants'));
    }
}
