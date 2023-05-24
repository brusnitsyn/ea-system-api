<?php

use Illuminate\Support\Facades\Route;

Route::controller(\App\Http\Controllers\Api\AccountController::class)->prefix('account')->group(function () {
    Route::post('register', 'register')->name('account.register');
    Route::post('login', 'login')->name('account.login');
    Route::middleware('auth:sanctum')->group(function () {
        Route::get('user', 'user')->name('account.user');
        Route::post('logout', 'logout')->name('account.logout');
    });
});
