<?php

use Illuminate\Support\Facades\Route;

Route::controller(\App\Http\Controllers\Api\EquipmentController::class)->prefix('equipments')->group(function () {
    Route::get('/', 'all')->name('equipments.all');
    Route::middleware('auth:sanctum')->group(function () {
        Route::post('/', 'create')->name('equipments.create');
    });
    Route::prefix('{id}')->group(function () {
       Route::get('/', 'get')->name('equipments.get');

       Route::prefix('comment')->group(function () {
           Route::post('/', 'createComment')->name('equipments.comment.create');
           Route::prefix('{commentId}')->group(function () {
               Route::post('/', 'updateComment')->name('equipments.comment.update');
           });
       });
    });
});
