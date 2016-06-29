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

Route::get('/', 'HomeController@Index' );
Route::get('category/{id}', 'HomeController@ItemList');
Route::get('item/{id}', 'HomeController@Item');


Route::get('item', function(){
	$item = App\Item::find(1);
});
