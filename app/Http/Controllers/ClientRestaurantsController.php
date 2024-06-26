<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Menu_Reservations;
use App\Models\Reservation;
use App\Models\Restaurant;
use App\Models\Restaurant_categories;
use App\Models\Reviews;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClientRestaurantsController extends Controller
{
    public function index()
    {
        $restaurants = Restaurant::all();
        return view('restaurant', compact('restaurants'));
    }

    public function detail($id)
    {
        $restaurant = Restaurant::find($id);
        $category = Restaurant_categories::find($restaurant['category_id']);
        $menus = Menu::where('restaurant_id', $restaurant->id)->get();
        $user = Auth::user();
        $reviews = Reviews::join('restaurants', 'reviews.restaurant_id', '=', 'restaurants.id')
            ->join('users', 'reviews.user_id', '=', 'users.id')
            ->where('restaurants.id', $restaurant->id)
            ->select('reviews.*', 'users.name as user_name', 'restaurants.name as restaurant_name')
            ->get();
        return view('restaurantDetails', compact('restaurant', 'category', 'menus', 'reviews'));
    }

    public function menu()
    {
        $categories = Restaurant_categories::all();
        return view('menu', compact('categories'));
    }

    public function reservation($id)
    {
        $restaurant = Restaurant::find($id);
        $menus = Menu::where('restaurant_id', $restaurant->id)->get();
        return view('reservation', compact('restaurant', 'menus'));
    }

    public function reservationMenu($id)
    {
        $restaurant = Restaurant::find($id);
        $menus = Menu::where('restaurant_id', $restaurant->id)->get();
        return view('submitmenu', compact('restaurant', 'menus'));
    }

    public function reservationData($id)
    {
        $restaurant = Restaurant::find($id);
        $menus = Menu::where('restaurant_id', $restaurant->id)->get();
        $reservationsdata = Reservation::where('restaurant_id', $restaurant->id)->get();
        return response()->json($reservationsdata);
    }

    public function addMenuToReservation(Request $request, $restaurantId, $menuId)
    {
        // Validate the request
        $request->validate([
            'quantity' => 'integer|min:1',
        ]);

        // Get the menu and restaurant instances
        $menu = Menu::findOrFail($menuId);
        $reservation = Reservation::where('user_id', Auth::user()->id)->latest();
        $reservationMenu = new Menu_Reservations();
        $reservationMenu->menu_id = $menu->id;
        $reservationMenu->reservation_id = $reservation->id;
        $reservationMenu->quantity = $request->input('quantity');
        $reservationMenu->save();

        notify()->success("Berhasil Menambahkan");
        return redirect()->back()->with('success', 'Menu added to reservation successfully!');
    }

    public function reservationStore(Request $request, $id)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'date' => 'required',
            'guests' => 'required|numeric|min:1',
            'table' => 'required|numeric|min:1',
        ]);

        // Get the restaurant and menu data
        $restaurant = Restaurant::find($id); // assuming you have a restaurant_id hidden field
        $menus = Menu::where('restaurant_id', $restaurant->id)->get();

        // Create a new reservation
        $reservation = new Reservation();
        $reservation->restaurant_id = $restaurant->id;
        $reservation->user_id = Auth::user()->id;
        $reservation->reservation_date = $validatedData['date'];
        $reservation->table_number = $validatedData['table'];
        $reservation->number_of_guest = $validatedData['guests'];
        $reservation->status = 'pending';
        $reservation->phone_number = Auth::user()->phone;
        $reservation->price = 50000 * $validatedData['guests'];

        // Try to save the reservation
        if ($reservation->save()) {
            // Success!
            notify()->success('Berhasil Membuat Reservasi!, Lanjut Menambahakan Menu');
            return redirect()->back();
        } else {
            // Failure
            notify()->error('Gagal membuat reservasi. Silakan coba lagi!');
            return redirect()->back();
        }
    }


    public function bycategory($name)
    {
        $category = Restaurant_categories::where('category_name', $name)->first();
        if ($category) {
            $restaurants = Restaurant::where('category_id', $category->id)->get();
            return view('restaurant', compact('category', 'restaurants'));
        } else {
            return redirect()->back();
        }
    }

    public function review($id)
    {
        $restaurant = Restaurant::find($id);
        return view('review', compact('restaurant'));
    }

    public function reviewPost(Request $request, $restaurantId)
    {
        // Validate the request
        $request->validate([
            'review' => 'required|string',
            'rating' => 'required|integer|min:1|max:5',
        ]);

        // Get the restaurant instance
        $restaurant = Restaurant::find($restaurantId);

        // Create a new review
        $review = new Reviews();
        $review->user_id = Auth::user()->id;
        $review->restaurant_id = $restaurant->id;
        $review->review_text = $request->input('review');
        $review->rating = $request->input('rating');
        $review->save();

        // Success!
        notify()->success('Review submitted successfully!');

        return redirect()->back();
    }
}
