<?php

use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\AdminProfileController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\RestaurantHomeController;
use App\Http\Controllers\RestaurantMenuController;
use App\Http\Middleware\ValidateRole;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
Route::get('/home', [HomeController::class, 'index']);

Route::get('/admin/dashboard', function () {
    return view('admin.page.home');
});

Route::get('/admin/users', [AdminUserController::class, 'index'])->middleware(ValidateRole::class);
Route::get('/admin/users/{id}', [AdminUserController::class, "destroy"])->middleware(ValidateRole::class);

Route::get('/admin/categorys', [AdminCategoryController::class, 'index']);
Route::get('/admin/categorys/japanese', [AdminCategoryController::class, 'tableList']);

Route::get('/admin/myprofile', [AdminProfileController::class, 'index']);

Route::get('/restaurantadmin/dashboard', [RestaurantHomeController::class, 'index']);
Route::get('/restaurantadmin/addmenu', [RestaurantMenuController::class, 'addMenu']);

Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'auth']);

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/logout', [LoginController::class, 'logout']);
