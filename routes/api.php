<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Middleware\JwtMiddleware;

Route::post('login', [AuthController::class, 'login']);
Route::middleware([JwtMiddleware::class])->group(function () {
    Route::apiResource('posts', PostController::class);
});