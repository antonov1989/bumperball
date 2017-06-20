<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'HomeController@index')->name('home');
Route::get('search', 'HomeController@search')->name('search');

Route::group(['prefix' => 'auth'], function () {
    // Authentication routes...
    Route::get('login', 'Auth\AuthController@getLogin');
    Route::post('login', 'Auth\AuthController@postLogin');
    Route::get('admin', 'Auth\AuthController@getAdminLogin');
    Route::post('admin', 'Auth\AuthController@postAdminLogin');
    Route::get('logout', 'Auth\AuthController@getLogout');

    // Registration routes...
    Route::get('register', 'Auth\AuthController@getRegister');
    Route::post('register', 'Auth\AuthController@postRegister');
});

/*Route::group(['before' => 'guest.admin', 'as' => 'admin::'], function () {
    Route::get('auth/login', function () {
        return View::make('user.login');
    })->name('login');

    Route::post('auth/login', 'UserController@adminLogin');
});*/