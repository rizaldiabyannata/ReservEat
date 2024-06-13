<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RestaurantMenuController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $restaurant = Restaurant::where('user_id', $user->id)->first();
        $menus = Menu::where('restaurant_id', $restaurant->id)->get();
        return view('restaurant.daftarmenu', compact('menus'));
    }

    public function addMenu()
    {
        return view('restaurant.formresto');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string',
            'path_photo_menu' => 'required|image|mimes:jpg,jpeg,png',
            'menu_category' => 'required',
            'description' => 'required|string',
            'price' => 'required|integer',
        ]);
        try {
            $menu = new Menu();
            $menu->name = $validatedData['name'];
            if ($request->hasFile('path_photo_menu')) {
                $file = $request->file('path_photo_menu');
                $fileName = time() . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('assets/restaurantMenu/'), $fileName);
                $menu->path_photo_menu = $fileName;
            }
            $menu->menu_category = $validatedData['menu_category'];
            $menu->description = $validatedData['description'];
            $menu->price = $validatedData['price'];
            if (Auth::user()->role === 'restaurant') {
                $user = Auth::user();
                $restaurant = Restaurant::where('user_id', $user->id)->first();
                $menu->restaurant_id = $restaurant->id;
            }
            $menu->save();

            notify()->success('Berhasil Menambahkan Menu ' . $menu->name);
            return redirect('/restaurantadmin/daftarmenu')->with('success', 'Menu added successfully!');
        } catch (\Exception $e) {
            notify()->warning("gagal" . $e);
            return back()->withErrors(['error' => 'Error adding menu: ' . $e->getMessage()])->withInput();
        }
    }

    public function destroy($id)
    {
        $menu = Menu::find($id);
        try {
            $menu->delete();
            notify()->success('Menu deleted successfully!');
            return redirect()->back();
        } catch (\Exception $e) {
            notify()->warning("Gagal menghapus menu: " . $e);
            return back()->withErrors(['error' => 'Error deleting menu: ' . $e->getMessage()]);
        }
    }

    public function editForm($id)
    {
        $menu = Menu::find($id);
        return view('restaurant.formeditmenu', compact('menu'));
    }

    public function update(Request $request, $id)
    {
        $menu = Menu::find($id);
        if (!$menu) {
            abort(404);
        }

        $validatedData = $request->validate([
            'name' => 'required|string',
            'path_photo_menu' => 'required|image|mimes:jpg,jpeg,png',
            'menu_category' => 'required',
            'description' => 'required|string',
            'price' => 'required|integer',
        ]);

        try {
            $menu->name = $validatedData['name'];
            $menu->menu_category = $validatedData['menu_category'];
            if ($request->hasFile('path_photo_menu')) {
                $file = $request->file('path_photo_menu');
                $fileName = time() . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('assets/profiles'), $fileName);
                $menu->path_photo_menu = $fileName;
            }
            $menu->description = $validatedData['description'];
            $menu->price = $validatedData['price'];
            $menu->save();

            notify()->success('Menu updated successfully!');
            return redirect('/restaurantadmin/daftarmenu')->with('success', 'Menu updated successfully!');
        } catch (\Exception $e) {
            notify()->warning("Gagal mengupdate menu: " . $e);
            return back()->withErrors(['error' => 'Error updating menu: ' . $e->getMessage()])->withInput();
        }
    }
}
