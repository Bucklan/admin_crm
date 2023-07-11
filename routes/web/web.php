<?php

use App\Http\Controllers\Auth\LogoutController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    require('guest/auth.php');
});
//dd(Auth::user());
//dd(321);
Route::middleware('auth')->as('admin.')->group(function (){
//
//    Route::group(['middleware' => 'city_checker'], function () {
//        require('user/banners.php');
//        require('user/categories.php');
//dd(32543);

//        require('user/products.php');
//
//dd(3431);
//        require('user/orders.php');
//        require('user/couriers.php');
//    });
//
    require('user/profile.php');
    require('user/dashboard.php');
    require('user/cities.php');
//    require('user/genres.php');
//    require('user/managers.php');
//    require('user/clients.php');
//    require('user/help-sections.php');
//    require('user/settings.php');
//    require('user/deliveries.php');
//    require('user/promocodes.php');
//
    Route::post('logout', [LogoutController::class, 'logout'])->name('logout');
});
