<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use App\Models\Restaurant_categories;
use App\Models\Reviews;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AdminRestaurantController extends Controller
{
    public function index()
    {
        $restaurants = Restaurant::all();
        $restaurantsWithRatings = [];
        $authUser = Auth::user();
        foreach ($restaurants as $restaurant) {
            $avg_rating = Reviews::where('restaurant_id', $restaurant->id)
                ->avg('rating');
            $restaurant->average_rating = $avg_rating;
            $restaurantsWithRatings[] = $restaurant;
        }
        return view('admin.restaurants', compact('restaurantsWithRatings', 'authUser'));
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
        $authUser = Auth::user();
        return view('admin.addrestaurant', compact('categories', 'userWithRoleRestaurant', 'authUser'));
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
        $authUser = Auth::user();
        return view('admin.editrestaurant', compact('restaurantsWithRatings', 'authUser'));
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

            if ($request->has('category_id') && $request->input('category_id') != null) {
                $restaurant->category_id = $request->input('category_id');
            }

            if ($request->hasFile('photo_path')) {
                $file = $request->file('photo_path');
                $fileName = time() . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('assets/restaurantPhoto/'), $fileName);
                $restaurant->photo_path = $fileName;
                if ($restaurant->photo_path) {
                    unlink(public_path('assets/restaurantPhoto/' . $restaurant->photo_path));
                }
            }

            if (empty($request->input('photo_path'))) {
                $restaurant['photo_path'] = 'default_restaurant_image.jpg';
            }

            $restaurant->save();
            
            notify()->success('Berhasil Mengupdate restaurant ' . $restaurant['name']);
            return redirect('admin/restaurants');
        } else {
            notify()->warning('Gagal Mengupdate restaurant ' . $restaurant['name']);
            return redirect()->back()->withInput()->withErrors('gagal');
        }
    }


    public function formEdit($id)
    {
        $restaurant = Restaurant::find($id);
        $categories = Restaurant_categories::whereNotIn('id', [$restaurant->category_id])->get();
        $restaurantCategory = Restaurant_categories::find($restaurant->category_id);

        if (!$restaurant) {
            return redirect('/admin/restaurants')->with('error', 'User not found');
        }
        $authUser = Auth::user();

        return view('admin.formeditrestaurant', compact('restaurant', 'categories', 'restaurantCategory', 'authUser'));
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

    public function create(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'phone_number' => 'required|string|max:20',
            'open_time' => 'required',
            'close_time' => 'required',
            'number_of_tables' => 'required',
            'category_id' => 'required|exists:restaurant_categories,id',
            'user_id' => 'required',
            'photo_path' => 'required'
        ]);

        if ($request->hasFile('photo_path')) {
            $file = $request->file('photo_path');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('assets/restaurantPhoto/'), $fileName);
            $data['photo_path'] = $fileName;
        }

        try {
            $restaurant = Restaurant::create($data);
            notify()->success('Berhasil menambahkan restaurant ' . $restaurant->name);
            return redirect('/admin/restaurants');
        } catch (ValidationException $e) {
            notify()->warning('Gagal menambahkan restaurant' . $e);
            return redirect('/admin/users')->withErrors(['error' => 'Gagal menambahkan restaurant. ' . $e->getMessage()]);
        }
    }
}
