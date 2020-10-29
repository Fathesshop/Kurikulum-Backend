<?php

Route::namespace('Auth')->group(function () {
    Route::post('register', 'RegisterController');
    Route::post('login', 'LoginController');
    Route::post('logout', 'LogoutController');
});

Route::namespace('Article')->middleware('auth:api')->group(function () {
    Route::post('create-new-article', 'ArticleController@store');
    Route::patch('update-the-article/{article}', 'ArticleController@update');
    Route::delete('delete-the-article/{article}', 'ArticleController@destroy');
});

Route::get('articles', 'Article\ArticleController@index');
Route::get('articles/{article}', 'Article\ArticleController@show');

Route::get('user', 'UserController');