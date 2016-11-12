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

Route::get('/','URLController@initial')->middleware('locale');

Route::group(['middleware' => ['locale'], 'prefix' => '{locale}'], function($router) {

    Route::get('/','URLController@setLocaleURL');

    // locale/role
    Route::group(['prefix' => '{role}'], function($router) {

        Route::get('/','URLController@setRoleURL');

        Route::get('/home','HomeController@index');
        Route::get('/download','DownloadController@index');
        Route::get('/FAQ','FaqController@index');
        Route::get('/price','PriceController@index');
        Route::get('/contact','ContactController@index');

    });

});
