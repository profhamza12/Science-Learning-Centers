<?php

use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;


/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/
/* ----- Start Routes ----- */
Route::group(
    [
     'namespace' => 'App\Http\Controllers\Admin',
     'prefix' => LaravelLocalization::setLocale() . '/admin',
     'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ],
    ],
    function () {
        /* Start LoginController Routes */
        Route::group([], function () {
            Route::get('login', "LoginController@login")->name('admin.login');
            Route::post('login', "LoginController@check_login")->name('admin.check-login');
            Route::get('logout', 'LoginController@logout')->name('admin.logout');
            Route::get('forgot-password', 'LoginController@forget_password')->name('admin.forget-passowrd');
            Route::post('forgot-password', 'LoginController@send_reset_pass')->name('admin.password.email');
            Route::post('reset-password', 'LoginController@reset')->name('password.reset');
        });
        /* Start LoginController Routes */
        /* Start HomeController Routes */
        Route::group(['middleware' => 'auth'], function () {
            Route::get("/", "HomeController@index")->name('admin.dashboard');
        });
        /* End HomeController Routes */ 
});
/* ----- End Routes ----- */