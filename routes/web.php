<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/', 				'MoviesController@index')		->name('movies.index');
Route::get('/movies/{movies}', 	'MoviesController@show')		->name('movies.show');

Route::get('/actor',                 'ActorController@index')->name('actor.index');
Route::get('/actor/{actor}',     'ActorController@show')->name('actor.show');

