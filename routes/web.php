<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home',[\App\Http\Controllers\HomeController::class, "index"]);
Route::get('/orders',[\App\Http\Controllers\AdminController::class, "order"]);
Route::get('/rating',[\App\Http\Controllers\AdminController::class, "rating"]);
Route::get('/redirects',[\App\Http\Controllers\HomeController::class, "redirects"]);
Route::get('/users',[\App\Http\Controllers\AdminController::class, "user"]);
Route::get('/customers',[\App\Http\Controllers\AdminController::class, "customer"]);
Route::get('/deletemenu/{id}',[\App\Http\Controllers\AdminController::class, "deletemenu"]);
Route::get('/deleteorder/{id}',[\App\Http\Controllers\AdminController::class, "deleteorder"]);
Route::get('/foodmenu',[\App\Http\Controllers\AdminController::class, "foodmenu"]);
Route::post('/uploadfood',[\App\Http\Controllers\AdminController::class, "upload"]);
Route::get('/deleteuser/{id}',[\App\Http\Controllers\AdminController::class, "deleteuser"]);
Route::get('/deletecustomer/{id}',[\App\Http\Controllers\AdminController::class, "deletecustomer"]);
Route::resource('categories', CategoriesController::class);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
