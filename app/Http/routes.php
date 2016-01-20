<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
  	Route::get('/', ['as' => 'spareparts.index', 'uses' => 'SparepartsController@index']);
  	Route::resource('spareparts', 'SparepartsController');
  	Route::resource('monitoring', 'MonitoringController');
  	Route::resource('devices', 'DeviceController');
  	Route::resource('settings', 'SettingsController');
});

Route::group(['prefix' => 'api'], function () {
	Route::post('logdevice', ['as' => 'monitoring.logdevice', 'uses' => 'MonitoringController@logdevice']);
  	Route::get('devices', ['as' => 'monitoring.devices', 'uses' => 'MonitoringController@devices']);
});
