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

//
Route::get('/jake', function () {
    return "Hello, World!";
});


Route::group(['domain' => '{subdomain}.localhost'], function () {

    Route::get('/api/gg', 'API\HelloWorldController@getHelloWorld');

    Route::get('/api/status', 'API\StatusController@getStatus');

    Route::put('/api/status/update/yes', 'API\StatusController@putStatusYes');
    Route::put('/api/status/update/no', 'API\StatusController@putStatusNo');





});

Route::post('/api/subdomain', 'API\SubdomainController@postSubdomain');
