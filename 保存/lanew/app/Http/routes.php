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

Route::get('/', 'WelcomeController@index');
Route::get('home', 'HomeController@index');
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
Route::get('fuzhou','SelectController@citySelect');
Route::get('fujian','SelectController@provinceSelect');
Route::post('qq','SelectController@qq');
Route::get('qq',function()
{
    return  view('select');
});
Route::get('upload', function() {
  return view('pages.upload');
});
Route::post('apply/upload', 'ApplyController@upload');