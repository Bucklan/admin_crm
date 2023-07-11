<?php

use App\Http\Controllers\Admin\Account\AccountController;
use Illuminate\Support\Facades\Route;

Route::prefix('account')->as('account.')->group(function () {
    Route::prefix('profile')->as('profile.')->group(function () {
        Route::get('', [AccountController::class, 'index'])->name('index');
        Route::put('update', [AccountController::class, 'update'])->name('update');
        Route::post('upload', [AccountController::class, 'upload'])->name('upload');
    });
});
