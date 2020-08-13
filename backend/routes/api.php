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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// List keyboards
Route::get('keyboards', 'KeyboardController@index');

// List single keyboard
Route::get('keyboard/{id}', 'KeyboardController@show');

// Add new keyboard
Route::post('keyboard', 'KeyboardController@store');

// Update a keyboard
Route::put('keyboards', 'KeyboardController@store');

// Delete a keyboard
Route::delete('keyboards', 'KeyboardController@destroy');
