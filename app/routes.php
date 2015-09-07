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

Route::get('/', function()
{
	return View::make('start');
})->before('guest');
Route::get('/home', function(){
	return View::make('home');
})->before('auth');
Route::get('/organization', array('as' => 'organization', 'uses' => 'OrganizationsController@index'))->before('auth');
Route::get('/documents', function(){
	return View::make('documents.documents');
})->before('auth');
Route::get('/oss', function(){
	return View::make('os.oss');
})->before('auth');
Route::get('login', array('as' => 'login', 'uses' => 'UsersController@login'))->before('guest');
Route::post('/login', array('as' => 'login', 'uses' => 'UsersController@handleLogin'));
Route::get('/profile', array('as' => 'profile', 'uses' => 'UsersController@profile'))->before('auth');
Route::get('/logout', array('as' => 'logout', 'uses' => 'UsersController@logout'));