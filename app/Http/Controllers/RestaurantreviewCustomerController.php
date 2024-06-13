<?php

namespace App\Http\Controllers;

use App\Models\Replay_Reviews;
use App\Models\ReplayReviews;
use App\Models\Restaurant;
use App\Models\Reviews;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RestaurantReviewCustomerController extends Controller
{
    public function reviewCustomer()
    {
        $user = Auth::user();
        $reviews = Reviews::join('restaurants', 'reviews.restaurant_id', '=', 'restaurants.id')
            ->join('users', 'reviews.user_id', '=', 'users.id')
            ->where('restaurants.user_id', $user->id)
            ->select('reviews.*', 'users.name as user_name', 'restaurants.name as restaurant_name')
            ->get();
        return view('restaurant.reviewCustomer', compact('reviews'));
    }

    public function replay(Request $request, $review_id)
    {
        $user = Auth::user();
        $review = Reviews::find($review_id);

        if (!$review) {
            return back()->withError('Review not found');
        }

        $replay_text = $request->input('replay_text');

        $replay = new ReplayReviews();
        $replay->review_id = $review_id;
        $replay->restaurant_id = $review->restaurant_id;
        $replay->reply_text = $replay_text;
        $replay->save();

        return back()->withSuccess('Replay sent successfully');
    }
}
