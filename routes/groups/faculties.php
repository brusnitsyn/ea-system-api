<?php

use Illuminate\Support\Facades\Route;

Route::controller(\App\Http\Controllers\Api\FacultiesController::class)->prefix('faculties')->group(function () {
    Route::get('/', 'all')->name('faculties.all');
    Route::post('/', 'create')->name('faculties.create');
    Route::middleware('auth:sanctum')->group(function () {
        Route::get('user', 'user')->name('account.user');
        Route::post('logout', 'logout')->name('account.logout');
    });
});
