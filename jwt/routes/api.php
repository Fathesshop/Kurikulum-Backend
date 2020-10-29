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

Route::post('register', 'UserController@register');
Route::post('login', 'UserController@login');

Route::get('film', 'FilmController@index');
Route::post('/film', 'FilmController@store');
Route::get('/film/{id}', 'FilmController@show');
Route::patch('/film/{id}', 'FilmController@update');
Route::delete('/film/{id}', 'FilmController@destroy');


Route::get('user', 'UserController@getAuthenticatedUser')->middleware('jwt.verify');