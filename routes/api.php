<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::group(['namespace' => 'Api'], function () {

    Route::get('email/verify/{id}', 'AuthController@verify')->name('verificationapi.verify');
    Route::get('email/resend', 'AuthController@resend')->name('verificationapi.resend');

    Route::group(['prefix' => 'auth'], function () {
        Route::post('login', 'AuthController@login');
        Route::post('register', 'AuthController@register');
        Route::put('forgotPassword', 'AuthController@forgotPassword');
    });

    Route::group(['middleware' => 'auth:sanctum'], function () {
        Route::group(['prefix' => 'auth'], function () {
            Route::get('user', 'AuthController@user');
            Route::put('changePassword', 'AuthController@changePassword');
            Route::post('logout', 'AuthController@logout');
        });

        Route::group(['prefix' => 'user'], function () {
            Route::put('updateProfile', 'UserController@updateProfile');
            Route::put('updateAvatar', 'UserController@updateAvatar');
        });

        Route::resource('notification', 'NotificationController');
        Route::resource('plan', 'PlanController');
    });

});
