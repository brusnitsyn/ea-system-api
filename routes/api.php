<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

require __DIR__ . '/groups/account.php';
require __DIR__ . '/groups/faculties.php';
require __DIR__ . '/groups/departments.php';
require __DIR__ . '/groups/audiences.php';
require __DIR__ . '/groups/rules.php';
require __DIR__ . '/groups/users.php';
require __DIR__ . '/groups/equipments.php';
require __DIR__ . '/groups/accessories.php';
require __DIR__ . '/groups/comments.php';
