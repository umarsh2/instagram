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
//hm nay Game ko bind kia apny service container k sath or phr make k through usay get kr lia...
// hmari yh Game binding app() ko dd kr k daikhi ja skti hai.
// football string return krny ki bjay hm class ka object b return kr skty hn return new Game or class Game{} upr ho gi..
// hm multiple dependencies ko b manage kr skty hn for example game agr depend kry football class pay to ..
/* app()->bind('Game',function()
{
	return 'football';
}); */
//dd(app()->make('Game'));

class Football{}
class Game{
	public function __construct(Football $football)
	{
		return $this->football = $football;
	}
}
app()->bind('Game',function(){
	return new Game(new Football);
});
//dd(app()->make('Game'));

// this resolve function is very important, age hm yh likhy to hm na bind function ki zrurt na he make function ki..
// yh khudi dependencies ko search kry ga or hmary liy resolve kry ga..
//dd(resolve('Game'));


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

Route::get('/profile/{user}', 'ProfilesController@index')->name('profile.show')->middleware('auth');

Route::get('/','PostsController@index')->middleware('auth');
Route::get('/p/create','PostsController@create')->middleware('auth');
Route::post('/p','PostsController@store')->middleware('auth');
Route::get('/follow/{user}', 'FollowsController@store')->middleware('auth');
Route::get('profile/{user}/edit', 'ProfilesController@edit')->name('profile.edit')->middleware('auth');
Route::patch('profile/{user}/', 'ProfilesController@update')->name('profile.update')->middleware('auth');

// resource routes for Customer model
Route::resource("customer", "CustomerController");



// search k bad jo mrzi enter kro.. serach/umar/nawaz => umar/nawaz
Route::get('search/{search}', function ($search) {
    return $search;
})->where('search', '.*');


Route::fallback(function () {
    return "No route match so it is a default or fallback route..";
});
