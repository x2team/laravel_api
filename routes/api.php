<?php

use App\Http\Controllers\Api\V1\CompleteTaskController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\TaskController;

use App\Http\Controllers\Api\Auth\LoginController;
use App\Http\Controllers\Api\Auth\LogoutController;
use App\Http\Controllers\Api\Auth\RegisterController;



/*Route::middleware('auth:sanctum')->prefix('v1')->group(function(){

    Route::apiResource('/tasks', TaskController::class);
    Route::patch('/tasks/{task}/complete', CompleteTaskController::class);
    // Nhớ thêm vào header trong postman để tránh lỗi: Unauthenticated
    // Accept : application/json
    // Referer : localhost
});*/


require __DIR__ . '/api/v1.php';
require __DIR__ . '/api/v2.php';


Route::prefix('auth')->group(function(){
    Route::post('/login', LoginController::class);
    Route::post('/logout', LogoutController::class)->middleware('auth:sanctum');
    Route::post('/register', RegisterController::class);
});



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
