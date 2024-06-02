<?php

use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\AdminProfileController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\RestaurantHomeController;
use App\Http\Middleware\ValidateRole;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
Route::get('/home', [HomeController::class, 'index']);
Route::get('/category',[HomeController::class, 'category']);
Route::get('/restaurant',[HomeController::class, 'restaurant']);
Route::get('/restaurant/reservation',[HomeController::class, 'reservation']);
Route::get('/restaurant/restaurantdetails',[HomeController::class, 'restaurantDetails']);
Route::get('/restaurant/menu', [RestaurantController::class, 'menu'])->name('restaurant.menu');
Route::get('/restaurant/menu/{category?}', [RestaurantController::class, 'menu'])->name('restaurant.menu');

Route::get('/admin/dashboard', function () {
    return view('admin.page.home');
});

Route::get('/profile',[ProfileController::class, 'Profile']);
Route::get('/profile/editprofile',[ProfileController::class, 'editProfile']);
Route::get('/profile/reservationorder',[ProfileController::class, 'ReservationOrder']);
Route::get('/profile/history',[ProfileController::class, 'History']);


Route::get('/admin/users', [AdminUserController::class, 'index'])->middleware(ValidateRole::class);
Route::get('/admin/users/{id}', [AdminUserController::class, "destroy"])->middleware(ValidateRole::class);

Route::get('/admin/categorys', [AdminCategoryController::class, 'index']);
Route::get('/admin/categorys/japanese', [AdminCategoryController::class, 'tableList']);

Route::get('/admin/myprofile', [AdminProfileController::class, 'index']);

Route::get('/restaurantadmin/dashboard', [RestaurantHomeController::class, 'index']);

Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'auth']);

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/logout', [LoginController::class, 'logout']);
