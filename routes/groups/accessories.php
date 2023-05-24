<?php

use Illuminate\Support\Facades\Route;

Route::controller(\App\Http\Controllers\Api\AccessoriesController::class)->prefix('accessories')->group(function () {
    Route::get('/', 'all')->name('accessories.register');
    Route::middleware('auth:sanctum')->group(function () {
        Route::post('/', 'create')->name('accessories.create');
    });

    Route::prefix('{id}')->group(function () {
        Route::post('/', 'update')->name('accessories.update');
    });

    Route::prefix('statuses')->group(function () {
        Route::get('/', 'allStatuses')->name('accessories.statuses.all');
    });
    Route::prefix('types')->group(function () {
        Route::get('/', 'allTypes')->name('accessories.types.all');
    });
});
