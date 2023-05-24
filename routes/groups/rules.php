<?php

use Illuminate\Support\Facades\Route;

Route::controller(\App\Http\Controllers\Api\RulesController::class)->prefix('rules')->group(function () {
    Route::get('/', 'all')->name('rules.all');
});
