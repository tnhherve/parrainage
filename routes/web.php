<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [
	'as' => 'home',
	'uses' => 'PagesController@home'
]);

Route::get('/contact', [
	'as' => 'contact',
	'uses' => 'PagesController@contact'
]);

Route::get('/addUser', [
	'as' => 'addUser',
	'uses' => 'PagesController@addUser'
]);

Route::get('/parrainage', [
	'as' => 'parrainage',
	'uses' => 'PagesController@parrainage'
]);

Route::get('/cycle', [
	'as' => 'cycle',
	'uses' => 'PagesController@cycle'
]);