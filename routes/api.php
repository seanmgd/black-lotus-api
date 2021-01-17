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

//Product routes
Route::get('/products', 'ProductController@indexApi');
Route::get('/product/{slug}', 'ProductController@showApi');

//Authentication
Route::post('/register', 'AuthController@register');
Route::post('/login', 'AuthController@login');

//User
Route::middleware(['auth:sanctum'])->group(function () {
    Route::resource('/users', 'UserController');
    Route::post('/logout', 'AuthController@logout');
});
