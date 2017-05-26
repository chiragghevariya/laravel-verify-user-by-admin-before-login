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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('main','UserController');

Route::get('login',['as'=>'getlogin','uses'=>'UserController@getlogin']);
Route::post('login',['uses'=>'UserController@login']);

Route::get('register',
	[
		'as'=>'getregister',
		'uses'=>'UserController@getregister'
	]);

Route::post('register',
	[
		
		'uses'=>'UserController@register'
	]);
	
	
Route::group(['prefix'=>'student','middleware'=>'auth'],function(){

	Route::get('home',['uses'=>'UserController@userdash']);
	
});

Route::group(['prefix'=>'admin','middleware'=>'auth'],function(){

	Route::get('home',['as'=>'adminhome','uses'=>'UserController@admindash']);
	Route::get('home/{verify}',
		[	
			'as'=>'showverify',
			'uses'=>'UserController@show'
		]);
	Route::put('home/{update}',
		[	
			'as'=>'verifyupdate',
			'uses'=>'UserController@update'
		]);

});

Route::get('logout',['uses'=>'UserController@logout']);





