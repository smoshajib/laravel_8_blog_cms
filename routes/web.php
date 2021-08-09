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
use App\Http\Controllers\SiteController;
Route::get('/', function () {
    return view('web.pages.home');
});

Route::get('page/{post}', SiteController::class)->name('site');

// demo check

Route::get('about',[SiteController::class , 'about'])->name('about');
Route::get('service',[SiteController::class , 'service'])->name('service');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
//    Route::resource('categories',App\Http\Controllers\CategoryController::class);
//    Route::resource('posts',App\Http\Controllers\PostController::class);
//    Route::resource('pages',App\Http\Controllers\PageController::class);
//    Route::resource('galleries',App\Http\Controllers\GalleryController::class);
//});
