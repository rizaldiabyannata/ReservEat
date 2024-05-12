<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('admin/dashboard', function () {
    return view('admin/page/home');
});

Route::get('/home', function () {
    return view('restaurant/main');
});

Route::get('/salah', function () {
    return view('restaurant/salah');
});