<?php

use Illuminate\Support\Facades\Route;

Route::controller(\App\Http\Controllers\Api\UserController::class)->prefix('users')->group(function () {
    Route::get('/', 'all')->name('users.all');
});
