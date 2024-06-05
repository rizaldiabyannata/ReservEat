<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientCategoryController extends Controller
{
    public function index()
    {
        return view('category');
    }
}
