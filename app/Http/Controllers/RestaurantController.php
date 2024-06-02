<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    public function menu($category = null)
    {
        $categories = ['Japanese', 'Chinese', 'Indonesian', 'Korean', 'Western', 'Italian'];
        // Dummy data for the menu
        $menus = [
            ['name' => 'Sushi', 'category' => 'Japanese'],
            ['name' => 'Ramen', 'category' => 'Japanese'],
            ['name' => 'Dim Sum', 'category' => 'Chinese'],
            ['name' => 'Nasi Goreng', 'category' => 'Indonesian'],
            ['name' => 'Bibimbap', 'category' => 'Korean'],
            ['name' => 'Burger', 'category' => 'Western'],
            ['name' => 'Pizza', 'category' => 'Italian'],
        ];

        if ($category) {
            $menus = array_filter($menus, function ($menu) use ($category) {
                return $menu['category'] === $category;
            });
        }

        return view('menu', compact('categories', 'menus', 'category'));
    }
}
