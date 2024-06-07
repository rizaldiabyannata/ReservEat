<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class RestaurantMenuController extends Controller
{
    public function index()
    {
        $menus = Menu::where('restaurant_id', '1')->get();
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
            // 'photo' => 'required|image|mimes:jpg,jpeg,png',
            'category' => 'required',
            'description' => 'required|string',
            'stock' => 'required|integer',
            'price' => 'required|integer',
        ]);

        try {
            $menu = new Menu();
            $menu->name = $validatedData['name'];
            $menu->path_photo_menu = 'dafault.jpg';
            $menu->menu_category_id = $validatedData['category'];
            $menu->description = $validatedData['description'];
            $menu->stock = $validatedData['stock'];
            $menu->price = $validatedData['price'];
            $menu->restaurant_id = 1; // assuming the restaurant ID is 1
            $menu->save();

            notify()->success('Berhasil');
            return redirect()->back()->with('success', 'Menu added successfully!');
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

    public function update(Request $request, $id)
    {
        $menu = Menu::find($id);
        if (!$menu) {
            abort(404);
        }

        $validatedData = $request->validate([
            'name' => 'required|string',
            'photo' => 'required|image|mimes:jpg,jpeg,png',
            'category' => 'required',
            'description' => 'required|string',
            'stock' => 'required|integer',
            'price' => 'required|integer',
        ]);

        try {
            $menu->name = $validatedData['name'];
            $menu->menu_category_id = $validatedData['category'];
            $menu->path_photo_menu = $validatedData['photo'];
            $menu->description = $validatedData['description'];
            $menu->stock = $validatedData['stock'];
            $menu->price = $validatedData['price'];
            $menu->save();

            notify()->success('Menu updated successfully!');
            return redirect()->back()->with('success', 'Menu updated successfully!');
        } catch (\Exception $e) {
            notify()->warning("Gagal mengupdate menu: " . $e);
            return back()->withErrors(['error' => 'Error updating menu: ' . $e->getMessage()])->withInput();
        }
    }
}
