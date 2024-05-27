<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminCategoryController extends Controller
{
    public function index()
    {
        return view('admin.page.categorys');
    }

    public function tableList()
    {
        return view('admin.page.listCategoryRestaurant');
    }

    public function addcategory()
    {
        return view('admin.page.addcategory');
    }

    public function editCategory()
    {
        $categories = [
            [
                'id' => 1,
                'name' => 'Italian',
                'description' => 'Italian cuisine is known for its emphasis on fresh vegetables, herbs, and olive oil.'
            ],
            [
                'id' => 2,
                'name' => 'Chinese',
                'description' => 'Chinese cuisine is known for its variety of cooking techniques and ingredients.'
            ],
            [
                'id' => 3,
                'name' => 'Japanese',
                'description' => 'Japanese cuisine is known for its emphasis on fresh seafood, rice, and noodle dishes.'
            ],
            [
                'id' => 4,
                'name' => 'Mexican',
                'description' => 'Mexican cuisine is known for its bold flavors, vibrant colors, and variety of spices.'
            ],
            [
                'id' => 5,
                'name' => 'Korean',
                'description' => 'Korean cuisine is known for its spicy and savory flavors, often featuring kimchi and BBQ dishes.'
            ],
            [
                'id' => 6,
                'name' => 'Western',
                'description' => 'Western cuisine is known for its rich flavors, heavy sauces, and hearty portions.'
            ]
        ];
        return view('admin.page.editcategory', compact('categories'));
    }
}
