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

Route::get('/', 'TankController@index');
Route::resource('tank', 'TankController');
Route::get('tanks', 'TankController@index');
Route::post('tank/{id}/photos', 'TankController@addPhoto');
