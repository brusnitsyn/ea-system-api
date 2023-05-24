<?php

use Illuminate\Support\Facades\Route;

Route::controller(\App\Http\Controllers\Api\AudiencesController::class)->prefix('audiences')->group(function () {
    Route::get('/', 'all')->name('audiences.all');
    Route::post('/', 'create')->name('audiences.create');
    Route::middleware('auth:sanctum')->group(function () {
        Route::get('user', 'user')->name('account.user');
        Route::post('logout', 'logout')->name('account.logout');
    });
});
