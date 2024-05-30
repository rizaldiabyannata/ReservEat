<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Restaurant;
use App\Models\User;
use App\Models\Reviews;

class ReviewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $reviews = [];
        for ($i = 0; $i < 50; $i++) {
            $restaurants = Restaurant::all();
            $randomRestaurant = $restaurants->random(); // <--- select a random restaurant
            $user = User::all();
            $randomUser = $user->random();
            $review = new Reviews();
            $review->restaurant_id = $randomRestaurant->id; // <--- use the random restaurant's ID
            $review->user_id = $randomUser->id;
            $review->review_text = 'This is a dummy review ' . $i;
            $review->rating = rand(1, 5);
            $review->save();
            $reviews[] = $review;
        }
    }
}
