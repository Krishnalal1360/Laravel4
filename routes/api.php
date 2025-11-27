<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\BlogController;
use App\Http\Controllers\Api\V1\ResourceBlogController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::prefix('v1')->group(function(){
    //
    Route::get('/blogs/search', [BlogController::class, 'search']);
    //
    Route::get('/blogs', [BlogController::class, 'index']);
    //
    Route::post('/blogs', [BlogController::class, 'store']);
    //
    Route::put('/blogs/{id}', [BlogController::class, 'update']);
    //
    Route::get('/blogs/{id}', [BlogController::class, 'show']);
    //
    Route::delete('/blogs/{id}', [BlogController::class, 'destroy']);
});

//

Route::apiResource('/blogs-resource', ResourceBlogController::class);