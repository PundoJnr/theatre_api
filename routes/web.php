<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', 'Web\PagesController@home');

Auth::routes();

/**
 * Routes for uploads
 */
Route::get('uploads', 'Web\UploadsController@index');
Route::get('uploads/create', 'Web\UploadsController@create')->name('uploads.create');
Route::post('uploads', 'Web\UploadsController@store');
Route::post('uploads/{id}', 'Web\UploadsController@show');

Route::get('privacy', 'Web\PagesController@privacy');


// Route::get('/home', 'HomeController@index')->name('home');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
