<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
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


// BACKEND ROUTES
// Admin dashboard 
Route::resource('/dashboard', 'App\Http\Controllers\BackEnd\DashboardController');
// Bookings
Route::resource('/bookings', 'App\Http\Controllers\BackEnd\BookingController');
// Feedbacks
Route::resource('/feedbacks', 'App\Http\Controllers\BackEnd\FeedbackController');
// Orders
Route::resource('/orders', 'App\Http\Controllers\BackEnd\OrderController');
// Food menu category
Route::resource('/foodmenu_categories', 'App\Http\Controllers\BackEnd\FoodMenuCategoryController');
// Food menu
Route::resource('/foodmenus', 'App\Http\Controllers\BackEnd\FoodMenuController');

