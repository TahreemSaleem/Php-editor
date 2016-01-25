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
// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

Route::post('View', array('as'=>'postTry', 'uses'=>'myController@Form'));
Route::get('View', array('as'=>'getTry', 'uses'=>'myController@Form'));



Route::get('ViewCode/{id}', 'myController@vCode');

Route::get('/', function () {
    return Redirect::to('home');
});
Route::get('home', function () {
   if (Auth::guest()){
   		return Redirect::to('auth/login');
   }
   else{
   	return Redirect::to('View');
}
});

Route::get('auth/logout', array('as'=>'logout', 'uses'=>'Auth\AuthController@getLogout'));
// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
//Route::get('auth/logout', 'Auth\AuthController@getLogout');

