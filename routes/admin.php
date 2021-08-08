<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Auth\AuthController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\GalleryController;
Route::get('/', function () {
    return view('cms.auth.login');
});

Route::get('dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
Route::get('login', [AuthController::class, 'adminLogin'])->name('admin-login.form');
Route::post('login', [AuthController::class, 'adminLoginPost'])->name('admin-login.submit');
Route::get('logout', [AuthController::class, 'logout'])->name('admin.logout');


Route::resources([
    'categories' => CategoryController::class,
    'posts' => PostController::class,
    'pages' => PageController::class,
    'galleries' => GalleryController::class
]);
