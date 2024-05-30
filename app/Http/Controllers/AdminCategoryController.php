<?php

namespace App\Http\Controllers;

use App\Models\restaurant_categories;
use Illuminate\Http\Request;

class AdminCategoryController extends Controller
{
    public function index()
    {
        $categories = restaurant_categories::all();
        return view('admin.categorys', compact('categories'));
    }

    public function tableList()
    {
        return view('admin.listCategoryRestaurant');
    }

    public function addcategory()
    {
        return view('admin.addcategory');
    }

    public function editCategory()
    {
        $categories = restaurant_categories::all();
        return view('admin.editcategory', compact('categories'));
    }
}
