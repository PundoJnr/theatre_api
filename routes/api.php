<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


/** Authentication Routes */
Route::post('login', 'Api\Auth\LoginController@login');
Route::post('register', 'Api\Auth\RegisterController@register');

Route::group(['middleware' => 'auth:api'], function() {
    Route::post('logout', 'Api\Auth\LoginController@logout');
});