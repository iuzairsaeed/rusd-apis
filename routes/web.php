<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', 'PageController@login')->name('login');

Route::get('logout', 'AuthController@logout');


Route::get('/ourinvestment','PageController@investment')->name('ourinvestment');

Route::get('/forgotpassword','PageController@forgot')->name('forgotpassword');

Route::get('/phonerecovery', 'PageController@phonerecovery')->name('phonerecovery');

Route::get('/signup', 'PageController@signup')->name('signup');

Route::get('/employment', 'PageController@employee')->name('employment');

Route::get('/tax', 'PageController@tax')->name('tax-residence');

Route::get('/help', 'PageController@help')->name('help');

Route::get('/contact', 'PageController@contact')->name('contact');

Route::get('/support', 'PageController@support')->name('support');

Route::get('/faq', 'PageController@faq')->name('faq');

Route::get('/who-we-are', 'PageController@whoare')->name('faq');

Route::get('/about', 'PageController@about')->name('about');

Route::get('/legal', 'PageController@legal')->name('legal disclaimer');

Route::get('/privacy', 'PageController@privacy')->name('Privacy Policy');

Route::get('/investmentplan', 'PageController@investmentplan')->name('Investment Plan');

Route::get('/moneymarket', 'PageController@moneymarket')->name('Money Market');

Route::get('/goalbased', 'PageController@goalbased')->name('Goal Based');

Route::get('/umrah', 'PageController@umrah')->name('Umrah');

Route::get('/profile', 'PageController@profile')->name('Profile');

Route::get('/alerts', 'PageController@alerts')->name('Alerts');

Route::get('/wallet', 'PageController@wallet')->name('E-Wallet');

Route::get('/dashboard-help', 'PageController@loginhelp')->name('Login Help');

Route::get('/dashboard-who', 'PageController@dashboardwho')->name('Dashboard Who');

Route::get('/portfolio', 'PageController@myporfolio')->name('My Portfolio');

Route::get('/sukukfund', 'PageController@sukukfund')->name('Sukuk Fund');

Route::get('/verifyemail', 'PageController@verifyemail')->name('Verify Email');






Auth::routes();

// middleware
Route::middleware(['auth'])->group(function () {

Route::get('/home', 'UserFormController@index')->name('user.step');
Route::get('/user-details', 'UserFormController@index')->name('user.step');
Route::post('formDataByStep', 'UserFormApiController@getFormDataByStep')->name('formDataByStep');

// Route::get('formDataByStep', 'UserFormApiController@getFormDataByStep');
  
});

// Route::get('/', 'HomeController@index')->name('home');
