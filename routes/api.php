<?php

use App\Http\Controllers\Api\V1\BlogCategoryController;
use App\Http\Controllers\Api\V1\BlogPostController;
use App\Http\Controllers\Api\V1\MediaController;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')
    ->middleware(['custom-api'])
    ->group(function () {
        Route::get('/posts', [BlogPostController::class, 'index']);
        Route::post('/posts', [BlogPostController::class, 'store']);
        Route::post('/posts/{blog:id}', [BlogPostController::class, 'update']);
        Route::delete('/posts/{blog:id}', [BlogPostController::class, 'destroy']);

        Route::post('/media', [MediaController::class, 'store']);

        Route::get('/categories', [BlogCategoryController::class, 'index']);
        Route::post('/categories', [BlogCategoryController::class, 'store']);
        Route::post('/categories/{category:id}', [BlogCategoryController::class, 'update']);
        Route::delete('/categories/{category:id}', [BlogCategoryController::class, 'destroy']);
    });

