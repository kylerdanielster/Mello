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

Route::get('/', function () {
    return view('welcome');
});

Route::get('boards', 'BoardController@index');

//TODO: should be route: boards/{id}/columns
Route::get('columns', 'ColumnController@index');

//TODO: should be route: boards/{id}/columns/{id}/cards
Route::get('cards', 'CardController@index');