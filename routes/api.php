<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/admin', [\App\Http\Controllers\ApiController::class, 'admin']);
Route::post('/register', [\App\Http\Controllers\ApiController::class, 'register']);
Route::post('/login', [\App\Http\Controllers\ApiController::class, 'login']);
Route::get('/categories', [\App\Http\Controllers\ApiController::class, 'categories']);
Route::get('/getregister', [\App\Http\Controllers\ApiController::class, 'getregister']);
Route::get('/getfood', [\App\Http\Controllers\ApiController::class, 'getfood']);



