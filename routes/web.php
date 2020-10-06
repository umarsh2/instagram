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



Auth::routes();

//uncomment bellow line to check the execution of TestService provider..
//dd(app()->make("Hello"));


Route::get('/home', 'HomeController@index')->name('home');

Route::get('/mw', 'HomeController@mw')->name('home')->middleware('test');
Route::get('/mw2', 'HomeController@mw2');
// this will also work fine for middleware....
// Route::get('/mw',function(){
// 	return view('mw');

// })->middleware('test');

Route::get('/welcome',function(	
)
{
	return view('welcome');
}
);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/profile/{user}', 'ProfilesController@index')->name('profile.show');

Route::get('/','PostsController@index');
Route::get('/p/create','PostsController@create');
Route::post('/p','PostsController@store');
Route::get('/follow/{user}', 'FollowsController@store');
Route::get('profile/{user}/edit', 'ProfilesController@edit')->name('profile.edit');
Route::patch('profile/{user}/', 'ProfilesController@update')->name('profile.update');

// resource routes for Customer model
Route::resource("customer", "CustomerController");

