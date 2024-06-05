<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use App\Models\Restaurant_categories;
use App\Models\Reviews;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

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
        $userWithRoleRestaurant = User::where('role', 'restaurant')->get();
        $categories = Restaurant_categories::all();
        return view('admin.addrestaurant', compact('categories', 'userWithRoleRestaurant'));
    }

    public function editRestaurant()
    {
        $restaurants = Restaurant::all();
        $restaurantsWithRatings = [];
        foreach ($restaurants as $restaurant) {
            $avg_rating = Reviews::where('restaurant_id', $restaurant->id)
                ->avg('rating');
            $restaurant->average_rating = $avg_rating;
            $restaurantsWithRatings[] = $restaurant;
        }
        return view('admin.editrestaurant', compact('restaurantsWithRatings'));
    }

    public function updateRestaurant(Request $request, $id)
    {
        $restaurant = Restaurant::find($id);
        if ($restaurant) {
            $restaurant->name = $request->input('name');
            $restaurant->address = $request->input('address');
            $restaurant->phone_number = $request->input('phone_number');
            $restaurant->open_time = $request->input('open_time');
            $restaurant->close_time = $request->input('close_time');
            $restaurant->email = $request->input('email');
            $restaurant->password = bcrypt($request->input('password'));
            $restaurant->category_id = $request->input('category_id');

            if (empty($request->input('photo_path'))) {
                $restaurant->photo_path = 'default_restaurant_image.jpg';
            } else {
                $restaurant->photo_path = $request->input('photo_path');
            }

            $restaurant->save();
            notify()->success('Berhasil Mengupdate restaurant' . $restaurant['name']);
            return redirect('admin/restaurants');
        } else {
            return redirect()->back()->withInput()->withErrors('gagal');
        }
    }


    public function formEdit($id)
    {
        $restaurant = Restaurant::find($id);
        $categories = Restaurant_categories::all();

        if (!$restaurant) {
            return redirect('/admin/restaurants')->with('error', 'User not found');
        }

        return view('admin.formeditrestaurant', compact('restaurant', 'categories'));
    }

    public function destroy($id): RedirectResponse
    {
        $restaurant = Restaurant::find($id);

        if (!$restaurant) {
            return redirect('/admin/editrestaurant')->with('error', 'User not found');
        }

        $restaurant->delete();
        return redirect('/admin/restaurants')->with('success', 'User deleted successfully');
    }

    public function create(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'phone_number' => 'required|string|max:20',
            'open_time' => 'required|string|max:10',
            'close_time' => 'required|string|max:10',
            'email' => 'required|string|email|max:255|unique:restaurants',
            'password' => 'required|string|min:8|confirmed',
            'category_id' => 'required|exists:restaurant_categories,id',
            'photo_path' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('photo_path')) {
            $file = $request->file('photo_path');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('assets/restaurants'), $fileName);
            $data['photo_path'] = $fileName;
        }

        try {
            $restaurant = Restaurant::create($data);
            notify()->success('Berhasil menambahkan restaurant ' . $restaurant->name);
            return redirect('/admin/restaurants');
        } catch (\Exception $e) {
            notify()->warning('Gagal menambahkan restaurant');
            return redirect()->back()->withInput()->withErrors(['error' => 'Gagal menambahkan restaurant. ' . $e->getMessage()]);
        }
    }
}
