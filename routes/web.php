<?php

use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\AdminHomeController;
use App\Http\Controllers\AdminOrderController;
use App\Http\Controllers\AdminProfileController;
use App\Http\Controllers\AdminRestaurantController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\ClientCategoryController;
use App\Http\Controllers\ClientHomeController;
use App\Http\Controllers\ClientProfileController;
use App\Http\Controllers\ClientReservationController;
use App\Http\Controllers\ClientRestaurantsController;
use App\Http\Controllers\RestaurantMenuController;
use App\Http\Controllers\RestaurantPesananController;
use App\Http\Controllers\RestaurantDaftarmenuController;
use App\Http\Controllers\RestaurantProfilerestoController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\RestaurantHomeController;
use App\Http\Controllers\RestaurantReviewCustomerController;
use App\Http\Middleware\IsAdmin;
use App\Http\Middleware\ValidateRole;
use Illuminate\Support\Facades\Route;

Route::get('/', [ClientHomeController::class, 'index']);
Route::get('/home', [ClientHomeController::class, 'index']);
Route::get('/category', [ClientCategoryController::class, 'index']);
Route::get('/restaurants', [ClientRestaurantsController::class, 'index']);
Route::get('/restaurants/{name}', [ClientRestaurantsController::class, 'bycategory']);
Route::get('/menus', [ClientRestaurantsController::class, 'menu']);
Route::get('/restaurants/{id}/detail', [ClientRestaurantsController::class, 'detail']);
Route::get('/restaurants/{id}/review', [ClientRestaurantsController::class, 'review']);
Route::post('/restaurants/{id}/review/post', [ClientRestaurantsController::class, 'reviewPost']);
Route::get('/restaurants/{id}/reservation', [ClientRestaurantsController::class, 'reservation']);
Route::post('/restaurants/{id}/reservation', [ClientRestaurantsController::class, 'reservationStore']);
Route::post('/restaurants/reservation/{id}/cencel', [ClientProfileController::class, 'cancelReservation']);
Route::post('/restaurants/reservation/{id}/payment/', [ClientProfileController::class, 'paymentReservation']);
Route::get('/profile', [ClientProfileController::class, 'index']);
Route::get('/profile/edit', [ClientProfileController::class, 'editprofile']);
Route::patch('/profile/edit', [ClientProfileController::class, 'updateProfile']);
Route::get('/profile/reservation', [ClientProfileController::class, 'reservation']);
Route::get('/profile/history', [ClientProfileController::class, 'history']);

Route::get('/admin/dashboard', [AdminHomeController::class, 'index'])->middleware('IsAdmin');

Route::get('/admin/users', [AdminUserController::class, 'index'])->middleware('IsAdmin');
Route::get('/admin/adduser', [AdminUserController::class, 'addUser'])->middleware('IsAdmin');
Route::post('/admin/adduser', [AdminUserController::class, 'store'])->middleware('IsAdmin');
Route::get('/admin/edituser', [AdminUserController::class, 'editUser'])->middleware('IsAdmin');
Route::get('/admin/edituser/form/{id}', [AdminUserController::class, 'formedit'])->middleware('IsAdmin');
Route::patch('/admin/edituser/form/{id}', [AdminUserController::class, 'update'])->middleware('IsAdmin');
Route::delete('/admin/user/delete/{id}', [AdminUserController::class, "destroy"])->middleware('IsAdmin');

Route::get('/admin/categorys', [AdminCategoryController::class, 'index'])->middleware('IsAdmin');
Route::get('/admin/category/{name}', [AdminCategoryController::class, 'bycategory']);
Route::get('/admin/addcategory', [AdminCategoryController::class, 'addCategory'])->middleware('IsAdmin');
Route::post('/admin/addcategory', [AdminCategoryController::class, 'create'])->middleware('IsAdmin');
Route::get('/admin/editcategory', [AdminCategoryController::class, 'editCategory'])->middleware('IsAdmin');
Route::get('/admin/editcategory/form/{id}', [AdminCategoryController::class, 'formedit'])->middleware('IsAdmin');
Route::patch('/admin/editcategory/form/{id}', [AdminCategoryController::class, 'update'])->middleware('IsAdmin');
Route::delete('/admin/category/delete/{id}', [AdminCategoryController::class, 'destroy'])->middleware('IsAdmin');

Route::get('/admin/restaurants', [AdminRestaurantController::class, 'index'])->middleware('IsAdmin');
Route::get('/admin/addrestaurant', [AdminRestaurantController::class, 'addRestaurant'])->middleware('IsAdmin');
Route::post('/admin/addrestaurant', [AdminRestaurantController::class, 'create'])->middleware('IsAdmin');
Route::get('/admin/editrestaurant', [AdminRestaurantController::class, 'editRestaurant'])->middleware('IsAdmin');
Route::get('/admin/editrestaurant/form/{id}', [AdminRestaurantController::class, 'formEdit'])->middleware('IsAdmin');
Route::patch('/admin/editrestaurant/form/{id}', [AdminRestaurantController::class, 'updateRestaurant'])->middleware('IsAdmin');
Route::delete('/admin/restaurant/delete/{id}', [AdminRestaurantController::class, 'destroy'])->middleware('IsAdmin');

Route::get('/admin/orders', [AdminOrderController::class, 'index']);

Route::get('/admin/myprofile', [AdminProfileController::class, 'index'])->middleware('IsAdmin');
Route::get('/admin/editprofile/{id}', [AdminProfileController::class, 'editProfile'])->middleware('IsAdmin');
Route::patch('/admin/editprofile/{id}', [AdminProfileController::class, 'updateProfile'])->middleware('IsAdmin');

// API
Route::get('/api/getorders', [AdminOrderController::class, 'getOrders']);
Route::get('/api/getrestaurants', [AdminRestaurantController::class, 'getRestaurants']);
Route::get('/api/getsessiondata', [AdminHomeController::class, 'getSessionDataAPI']);
Route::get('/api/{id}/reservation-data/', [ClientRestaurantsController::class, 'reservationData']);


Route::get('/restaurantadmin/dashboard', [RestaurantHomeController::class, 'index']);
Route::get('/restaurantadmin/addmenu', [RestaurantMenuController::class, 'addMenu']);
Route::post('/restaurantadmin/addmenu', [RestaurantMenuController::class, 'store']);
Route::get('/restaurantadmin/{id}/editmenu', [RestaurantMenuController::class, 'editForm']);
Route::patch('/restaurantadmin/{id}/editmenu', [RestaurantMenuController::class, 'update']);
Route::delete('/restaurantadmin/{id}/deletemenu', [RestaurantMenuController::class, 'destroy']);
Route::get('/restaurantadmin/pesanan', [RestaurantPesananController::class, 'Pesanan']);
Route::get('/restaurantadmin/daftarmenu', [RestaurantMenuController::class, 'index']);
Route::get('/restaurantadmin/review-customer', [RestaurantReviewCustomerController::class, 'reviewCustomer']);
Route::post('/restaurantadmin/review-customer/{id}', [RestaurantReviewCustomerController::class, 'replay']);
Route::get('/restaurantadmin/profileresto', [RestaurantProfilerestoController::class, 'profileresto']);

Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'auth']);

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

Route::post('/logout', [LoginController::class, 'logout']);
