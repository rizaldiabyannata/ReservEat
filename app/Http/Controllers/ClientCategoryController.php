<?php

namespace App\Http\Controllers;

use App\Models\Restaurant_categories;
use Illuminate\Http\Request;

class ClientCategoryController extends Controller
{
    public function index()
    {
        $categories = Restaurant_categories::all();
        return view('category', compact('categories'));
    }
}
