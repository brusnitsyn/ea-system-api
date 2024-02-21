<?php

use Illuminate\Support\Facades\Route;

Route::controller(\App\Http\Controllers\Api\TableContentController::class)->prefix('table')->group(function () {
    Route::get('/', 'all')->name('table.all');
    Route::prefix('/default')->group(function () {
        Route::get('/', 'allBase')->name('table.base.all');
    });
    Route::prefix('fill')->group(function () {
        Route::get('/', 'getAnotherFill')->name('table.fill.all');
    });
//    Route::middleware('auth:sanctum')->group(function () {
        Route::post('/', 'create')->name('table.create');
//    });
});
