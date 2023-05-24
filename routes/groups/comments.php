<?php

use Illuminate\Support\Facades\Route;

Route::controller(\App\Http\Controllers\Api\CommentController::class)->prefix('comments')->group(function () {
    Route::prefix('{id}')->group(function () {
        Route::delete('delete', 'delete')->name('comments.delete');
    });
});
