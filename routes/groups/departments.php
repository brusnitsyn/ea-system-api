<?php

use Illuminate\Support\Facades\Route;

Route::controller(\App\Http\Controllers\Api\DepartmentsController::class)->prefix('departments')->group(function () {
    Route::get('/', 'all')->name('departments.all');
    Route::post('/', 'create')->name('departments.create');
    Route::middleware('auth:sanctum')->group(function () {
        Route::get('user', 'user')->name('account.user');
        Route::post('logout', 'logout')->name('account.logout');
    });
});
