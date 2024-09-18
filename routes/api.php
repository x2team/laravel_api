<?php

use App\Http\Controllers\Api\V1\CompleteTaskController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\TaskController;



Route::middleware('auth:sanctum')->prefix('v1')->group(function(){

    Route::apiResource('/tasks', TaskController::class);
    Route::patch('/tasks/{task}/complete', CompleteTaskController::class);
    // Nhớ thêm vào header trong postman để tránh lỗi: Unauthenticated
    // Accept : application/json
    // Referer : localhost
});



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
