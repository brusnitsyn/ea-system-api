<?php

use Illuminate\Support\Facades\Route;

Route::controller(\App\Http\Controllers\Api\AudiencesController::class)->prefix('audiences')->group(function () {
    Route::get('/', 'all')->name('audiences.all');
    Route::post('/', 'create')->name('audiences.create');
    Route::post('/update', 'update')->name('audiences.update');
    Route::prefix('feature')->group(function () {
        Route::get('/', 'getFeature')->name('audiences.feature.get');
        Route::post('/', 'createFeature')->name('audiences.feature.create');
    });
    Route::prefix('board')->group(function () {
        Route::get('/types', 'getBoardTypes')->name('audiences.board.type.get');
        Route::get('/sizes', 'getBoardSizes')->name('audiences.board.size.get');
    });
    Route::middleware('auth:sanctum')->group(function () {
        Route::get('user', 'user')->name('account.user');
        Route::post('logout', 'logout')->name('account.logout');
    });
});
