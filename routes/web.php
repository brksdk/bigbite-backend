<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Site;
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

Route::get("/xx-admin",[\App\Http\Controllers\Admin\MainController::class,"index"]);
Route::post("/admin/login",[\App\Http\Controllers\Admin\MainController::class,"login"])->name('admin.login');
Route::get("/admin/orders",[\App\Http\Controllers\Admin\MainController::class,"orders"]);
//Route::get("/register",[Site::class,"register"]);
