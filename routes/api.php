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
Route::post('registration', 'AuthController@signUp');
Route::post('login', 'AuthController@login');
Route::get('email/verify/{id}', 'VerificationApiController@verify')->name('verificationapi.verify');
Route::get('email/resend', 'VerificationApiController@resend')->name('verificationapi.resend');


Route::post('send-forget-code', 'AuthController@sendForgetPasswordCode');
Route::post('check-reset-code', 'AuthController@checkResetCode');
Route::post('reset-password', 'AuthController@resetPassword');


Route::get('forgot-password', 'AuthController@forgot_password');



Route::middleware(['auth:sanctum'])->group(function () {
  Route::post('form-save-update', 'UserFormApiController@saveUpdate');
  Route::post('formDataByStep', 'UserFormApiController@getFormDataByStep');
});


// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
