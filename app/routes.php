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
Route::get('/home', [
    'as' => 'home',
    'uses' => 'HomeController@index'
])->before('auth');
Route::get('/organization', array('as' => 'organization', 'uses' => 'OrganizationsController@index'))->before('auth');
Route::get('/oss', [
    'as' =>'oss',
    'uses' =>'OssController@index'
])->before('auth');
Route::get('login', array('as' => 'login', 'uses' => 'UsersController@login'))->before('guest');
Route::post('login', array('as' => 'login', 'uses' => 'UsersController@handleLogin'));
Route::get('/profile', array('as' => 'profile', 'uses' => 'UsersController@profile'))->before('auth');
Route::get('/logout', array('as' => 'logout', 'uses' => 'UsersController@logout'));
Route::get('documents','DocumentsController@index' )->before('auth');
Route::get('okofs', 'OkofsController@index')->before('auth');
Route::get('organizations','OrganizationsController@all')->before('auth');
Route::controller('org','OrganizationsController');
Route::controller('documents', 'DocumentsController');
Route::controller('Items', 'ItemsController');
Route::controller('Okofs', 'OkofsController');
Route::get('/admin', [
    'as' => 'admin',
    'uses' => 'AdminController@index'
])->before('auth');
Route::controller('admin', 'AdminController');
Route::controller('organization', 'OrganizationsController');