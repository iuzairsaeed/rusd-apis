<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::group(['namespace' => 'Api'], function () {

    // Route::get('email/verify/{id}', 'AuthController@verify')->name('verificationapi.verify');
    // Route::get('email/resend', 'AuthController@resend')->name('verificationapi.resend');

    Route::group(['prefix' => 'auth'], function () {
        Route::post('login', 'AuthController@login');
        Route::post('register', 'AuthController@register');
    });

    // Forgot Password Apis 
    Route::get('forgot-password', 'AuthController@forgot_password');
    Route::post('check-reset-code', 'AuthController@checkResetCode');
    Route::post('reset-password', 'AuthController@resetPassword');


    // After Login 
    Route::group(['middleware' => 'auth:sanctum'], function () {
        Route::group(['prefix' => 'auth'], function () {
            Route::get('user', 'AuthController@user');
            Route::put('changePassword', 'AuthController@changePassword');
            Route::post('logout', 'AuthController@logout');
        });

        Route::group(['prefix' => 'user'], function () {
            Route::put('updateProfile', 'UserController@updateProfile');
            Route::put('updateAvatar', 'UserController@updateAvatar');
            Route::put('updatePin', 'UserController@updatePin');
            Route::put('updateBiometric', 'UserController@updateBiometric');
        });

        Route::resource('notification', 'NotificationController');

        Route::resource('plan', 'PlanController');
        
        Route::resource('citizen', 'CitizenController');

        Route::resource('securityQuestion', 'SecurityQuestionController');

    });

    // Without Auth
    Route::resource('support', 'SupportController');

});
