<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ThreadController;
use App\Http\Controllers\PostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user',
    function (Request $request) {
        return $request->user();
    })->middleware('auth:sanctum');

Route::get('/test', function () {
    return response()->json(['
    property' => 'value']);
});

Route::prefix('/auth')->group(function () {
    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth');
});

Route::get('/threads', [ThreadController::class, 'index']);
Route::get('/threads/{id}/posts', [ThreadController::class, 'posts']);
Route::get('/categories', [CategoryController::class, 'index']);
Route::get('/categories/{slug}/threads', [CategoryController::class, 'threads']);

Route::middleware('auth')->group(function () {
    Route::post('/threads', [ThreadController::class, 'create']);
    Route::delete('/threads/{id}', [ThreadController::class, 'delete']);
    Route::post('/posts', [PostController::class, 'create']);
    Route::delete('/posts/{id}', [PostController::class, 'delete']);
});
