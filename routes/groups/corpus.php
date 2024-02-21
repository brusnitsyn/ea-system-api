<?php

use Illuminate\Support\Facades\Route;

Route::controller(\App\Http\Controllers\Api\CorpusController::class)->prefix('corpus')->group(function () {
    Route::get('/', 'all')->name('corpus.all');
//    Route::middleware('auth:sanctum')->group(function () {
        Route::post('/', 'create')->name('corpus.create');
//    });
});
