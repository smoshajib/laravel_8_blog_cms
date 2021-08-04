<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::resource('categories',App\Http\Controllers\CategoryController::class);
    Route::resource('posts',App\Http\Controllers\PostController::class);
    Route::resource('pages',App\Http\Controllers\PageController::class);
    Route::resource('galleries',App\Http\Controllers\GalleryController::class);
});