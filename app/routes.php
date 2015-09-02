<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', [
	'as' => 'index',
	'uses' => 'StartController@index'
])->before('guest');
Route::get('home', 'HomeController@index')->before('auth');
Route::get('/documents',[
	'as' => 'documents',
	'uses' => 'DocumentsController@index'
]);
Route::get('registration', function(){
	return View::make('registration');
});
Route::get('/auth/login', [
	'as' => 'user-login',
	'uses' => 'AuthController@getLogin'
])->before('guest');
Route::post('/auth/login', [
	'uses' => 'AuthController@postLogin'
])->before('csrf');
