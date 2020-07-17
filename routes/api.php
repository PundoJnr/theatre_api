<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/** Authentication Routes */
Route::post('login', 'Api\Auth\LoginController@login');
Route::post('register', 'Api\Auth\RegisterController@register');

Route::group(['middleware' => 'auth:api'], function () {
    Route::post('logout', 'Api\Auth\LoginController@logout');

    // Interests
    Route::post('interests', 'Api\InterestsController@index');
});

  //videos
//   Route::get('videos', 'Api\VideosController@index');
//   Route::get('videos/{video}', 'Api\VideosController@show');
  Route::apiResource('/videos', 'Api\VideosController'); //->except('index')
