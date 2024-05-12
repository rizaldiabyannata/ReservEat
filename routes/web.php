<?php

use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\AdminMenuController;
use App\Http\Controllers\AdminProfileController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Middleware\ValidateRole;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin/dashboard', function () {
    return view('admin.page.home');
});

Route::get('/admin/users', [AdminUserController::class, 'index'])->middleware(ValidateRole::class);
Route::get('/admin/users/{id}', [AdminUserController::class, "destroy"])->middleware(ValidateRole::class);

Route::get('/admin/categorys', [AdminCategoryController::class, 'index']);
Route::get('/admin/categorys/japanese', [AdminCategoryController::class, 'tableList']);

Route::get('/admin/myprofile', [AdminProfileController::class, 'index']);

Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'auth']);

Route::get('/register', [RegisterController::class, 'index']);
