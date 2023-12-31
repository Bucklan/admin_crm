<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;

Route::prefix('login')->group(function () {
    Route::get('', [LoginController::class, 'index'])->name('login');
    Route::post('', [LoginController::class, 'login']);
});
