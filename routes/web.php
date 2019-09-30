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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'UserController');
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
});

Route::get('/eval/form', function(){
	return view('evaluation.tabel');
});
Route::get('/eval/form/add', function(){
	return view('evaluation.create');
});
Route::get('/eval/domain', function(){
	return view('evaluation.domain');
});
Route::get('/eval/domain/add', function(){
	return view('evaluation.createdomain');
});
Route::get('/eval/aspect', function(){
	return view('evaluation.aspect');
});
Route::get('/eval/aspect/add', function(){
	return view('evaluation.createaspect');
});
Route::get('/eval/indicator', function(){
	return view('evaluation.indicator');
});
Route::get('/eval/indicator/add', function(){
	return view('evaluation.createindicator');
});
Route::get('/eval/asign', function(){
	return view('evaluation.asign');
});
Route::get('/evaljob', function(){
	return view('jobs');
});