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

Route::post('users/add_user','UserController@add_user')->name('users.add_user');//routes for controller action add new user 
Route::get('/search', 'UserController@search_users');//routes for controller search action search user

Route::resource('users','UserController');



Route::get('/', 'UserController@index');//routes for controller search action search user

//Route::get('/', function () {
  //  return view('welcome');
//});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
