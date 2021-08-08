<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Auth\AuthController;
use App\Http\Controllers\Admin\AdminDashboardController;

Route::get('/', function () {
    return view('admin.auth.login');
});

Route::get('dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
Route::get('login', [AuthController::class, 'adminLogin'])->name('admin-login.form');
Route::post('login', [AuthController::class, 'adminLoginPost'])->name('admin-login.submit');
Route::get('logout', [AuthController::class, 'logout'])->name('admin.logout');


Route::resource('categories',App\Http\Controllers\CategoryController::class);
Route::resource('posts',App\Http\Controllers\PostController::class);
Route::resource('pages',App\Http\Controllers\PageController::class);
Route::resource('galleries',App\Http\Controllers\GalleryController::class);
