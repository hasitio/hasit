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


Route::group(['domain' => '{account}.localhost'], function () {

    Route::get('/api/gg', 'API\HelloWorldController@getHelloWorld');

});
