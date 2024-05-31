<?php

use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\AdminHomeController;
use App\Http\Controllers\AdminOrderController;
use App\Http\Controllers\AdminProfileController;
use App\Http\Controllers\AdminRestaurantController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\RestaurantHomeController;
use App\Http\Middleware\ValidateRole;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
Route::get('/home', [HomeController::class, 'index']);

Route::get('/admin/dashboard', [AdminHomeController::class, 'index']);

Route::get('/admin/users', [AdminUserController::class, 'index'])->middleware(ValidateRole::class);
Route::get('/admin/adduser', [AdminUserController::class, 'addUser'])->name('admin.adduser');
Route::post('/admin/adduser', [AdminUserController::class, 'store'])->name('admin.storeuser');
Route::get('/admin/edituser', [AdminUserController::class, 'editUser']);
Route::get('/admin/edituser/form/{id}', [AdminUserController::class, 'formedit'])->name('admin.formedit');
Route::patch('/admin/edituser/form/{id}', [AdminUserController::class, 'update'])->name('admin.updateuser');
Route::delete('/admin/user/delete/{id}', [AdminUserController::class, "destroy"])->middleware(ValidateRole::class);

Route::get('/admin/categorys', [AdminCategoryController::class, 'index']);
Route::get('/admin/addcategory', [AdminCategoryController::class, 'addCategory']);
Route::get('/admin/editcategory', [AdminCategoryController::class, 'editCategory']);
Route::get('/admin/categorys/japanese', [AdminCategoryController::class, 'tableList']);

Route::get('/admin/restaurants', [AdminRestaurantController::class, 'index']);
Route::get('/admin/addrestaurant', [AdminRestaurantController::class, 'addRestaurant']);
Route::get('/admin/editrestaurant', [AdminRestaurantController::class, 'editRestaurant']);

Route::get('/admin/orders', [AdminOrderController::class, 'index']);

// API
Route::get('/api/getorders', [AdminOrderController::class, 'getOrders']);
Route::get('/api/getrestaurants', [AdminRestaurantController::class, 'getRestaurants']);

Route::get('/admin/myprofile', [AdminProfileController::class, 'index']);
Route::get('/admin/editprofile', [AdminProfileController::class, 'editProfile']);

Route::get('/restaurantadmin/dashboard', [RestaurantHomeController::class, 'index']);

Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'auth']);

Route::get('/register', [RegisterController::class, 'index']);
Route::get('/register', [RegisterController::class, 'store']);

Route::get('/logout', [LoginController::class, 'logout']);
