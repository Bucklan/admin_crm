<?php

use App\Http\Controllers\Admin\City\CityController;
use Illuminate\Support\Facades\Route;


Route::prefix('cities')->as('cities.')->group(function () {
    Route::get('{city_id}', [CityController::class, 'select'])->name('choose-city');
});

Route::resource('cities',CityController::class)->except('show');
