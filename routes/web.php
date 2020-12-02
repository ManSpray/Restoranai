<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth'])->group(function () {
Route::get('/', [App\Http\Controllers\RestaurantController::class, 'index']);
Route::resource('restaurant', App\Http\Controllers\RestaurantController::class);
Route::resource('menu', App\Http\Controllers\MenuController::class);
// Route::get('restaurant/{id}/toeat', [App\Http\Controllers\CustomerController::class, 'toeat'])->name('restaurant.toeat');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
