<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminOrderController extends Controller
{
    public function index()
    {
        $orders = [
            [
                'reservation_by' => 'John Doe',
                'restaurant' => 'The Grill House',
                'number_of_people' => 4,
                'created_at' => '2022-01-01 10:00:00',
                'time_reservation' => '2022-01-02 19:00:00',
                'details' => 'Birthday Celebration'
            ],
            [
                'reservation_by' => 'Jane Smith',
                'restaurant' => 'Bistro 51',
                'number_of_people' => 2,
                'created_at' => '2022-01-03 14:00:00',
                'time_reservation' => '2022-01-04 18:00:00',
                'details' => 'Anniversary Dinner'
            ],
            [
                'reservation_by' => 'Bob Johnson',
                'restaurant' => 'The Italian Kitchen',
                'number_of_people' => 6,
                'created_at' => '2022-01-05 11:00:00',
                'time_reservation' => '2022-01-06 20:00:00',
                'details' => 'Family Gathering'
            ],
            [
                'reservation_by' => 'Maria Rodriguez',
                'restaurant' => 'Seafood Heaven',
                'number_of_people' => 3,
                'created_at' => '2022-01-08 12:00:00',
                'time_reservation' => '2022-01-09 18:00:00',
                'details' => 'Business Lunch'
            ],
            [
                'reservation_by' => 'David Lee',
                'restaurant' => 'The Chinese Restaurant',
                'number_of_people' => 5,
                'created_at' => '2022-01-10 13:00:00',
                'time_reservation' => '2022-01-11 19:00:00',
                'details' => 'Friends Reunion'
            ],
            [
                'reservation_by' => 'Emily Chen',
                'restaurant' => 'The Sushi Place',
                'number_of_people' => 2,
                'created_at' => '2022-01-12 15:00:00',
                'time_reservation' => '2022-01-13 20:00:00',
                'details' => 'Date Night'
            ],
            [
                'reservation_by' => 'Michael Brown',
                'restaurant' => 'The Steak House',
                'number_of_people' => 4,
                'created_at' => '2022-01-14 16:00:00',
                'time_reservation' => '2022-01-15 21:00:00',
                'details' => 'Birthday Party'
            ],
            [
                'reservation_by' => 'Sophia Patel',
                'restaurant' => 'The Indian Cafe',
                'number_of_people' => 3,
                'created_at' => '2022-01-16 10:00:00',
                'time_reservation' => '2022-01-17 19:00:00',
                'details' => 'Family Dinner'
            ],
            [
                'reservation_by' => 'Kevin White',
                'restaurant' => 'The Coffee Shop',
                'number_of_people' => 2,
                'created_at' => '2022-01-18 11:00:00',
                'time_reservation' => '2022-01-19 18:00:00',
                'details' => 'Business Meeting'
            ],
            [
                'reservation_by' => 'Rachel Kim',
                'restaurant' => 'The Korean BBQ',
                'number_of_people' => 5,
                'created_at' => '2022-01-20 12:00:00',
                'time_reservation' => '2022-01-21 20:00:00',
                'details' => 'Group Outing'
            ]
        ];

        return view('admin.page.orders', compact('orders'));
    }
    public function getOrders()
    {
        $orders = [
            [
                'reservation_by' => 'John Doe',
                'restaurant' => 'The Grill House',
                'number_of_people' => 4,
                'created_at' => '2022-01-01 10:00:00',
                'time_reservation' => '2022-01-02 19:00:00',
                'details' => 'Birthday Celebration'
            ],
            [
                'reservation_by' => 'Jane Smith',
                'restaurant' => 'Bistro 51',
                'number_of_people' => 2,
                'created_at' => '2022-01-03 14:00:00',
                'time_reservation' => '2022-01-04 18:00:00',
                'details' => 'Anniversary Dinner'
            ],
            [
                'reservation_by' => 'Bob Johnson',
                'restaurant' => 'The Italian Kitchen',
                'number_of_people' => 6,
                'created_at' => '2022-01-05 11:00:00',
                'time_reservation' => '2022-01-06 20:00:00',
                'details' => 'Family Gathering'
            ],
            [
                'reservation_by' => 'Maria Rodriguez',
                'restaurant' => 'Seafood Heaven',
                'number_of_people' => 3,
                'created_at' => '2022-01-08 12:00:00',
                'time_reservation' => '2022-01-09 18:00:00',
                'details' => 'Business Lunch'
            ],
            [
                'reservation_by' => 'David Lee',
                'restaurant' => 'The Chinese Restaurant',
                'number_of_people' => 5,
                'created_at' => '2022-01-10 13:00:00',
                'time_reservation' => '2022-01-11 19:00:00',
                'details' => 'Friends Reunion'
            ],
            [
                'reservation_by' => 'Emily Chen',
                'restaurant' => 'The Sushi Place',
                'number_of_people' => 2,
                'created_at' => '2022-01-12 15:00:00',
                'time_reservation' => '2022-01-13 20:00:00',
                'details' => 'Date Night'
            ],
            [
                'reservation_by' => 'Michael Brown',
                'restaurant' => 'The Steak House',
                'number_of_people' => 4,
                'created_at' => '2022-01-14 16:00:00',
                'time_reservation' => '2022-01-15 21:00:00',
                'details' => 'Birthday Party'
            ],
            [
                'reservation_by' => 'Sophia Patel',
                'restaurant' => 'The Indian Cafe',
                'number_of_people' => 3,
                'created_at' => '2022-01-16 10:00:00',
                'time_reservation' => '2022-01-17 19:00:00',
                'details' => 'Family Dinner'
            ],
            [
                'reservation_by' => 'Kevin White',
                'restaurant' => 'The Coffee Shop',
                'number_of_people' => 2,
                'created_at' => '2022-01-18 11:00:00',
                'time_reservation' => '2022-01-19 18:00:00',
                'details' => 'Business Meeting'
            ],
            [
                'reservation_by' => 'Rachel Kim',
                'restaurant' => 'The Korean BBQ',
                'number_of_people' => 5,
                'created_at' => '2022-01-20 12:00:00',
                'time_reservation' => '2022-01-21 20:00:00',
                'details' => 'Group Outing'
            ]
        ];
        return response()->json($orders);
    }
}
