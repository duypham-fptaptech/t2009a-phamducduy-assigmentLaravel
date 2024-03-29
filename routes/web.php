<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/userForm/create', [\App\Http\Controllers\UserController::class, 'userForm']);
Route::post('/userForm', [\App\Http\Controllers\UserController::class, 'store']);
Route::get('/userForm', [\App\Http\Controllers\UserController::class, 'userList']);
