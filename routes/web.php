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

Route::get('/','BaseController@index');

Route::get('/newcat','CreateController@index');

Route::post('/newcat/insert', 'CatController@insertOne');
Route::post('/newcat/update', 'CatController@updateOneAction');

Route::get('/newcat/delete/{id}', 'CatController@deleteOne');
Route::get('/newcat/update/{id}', 'CatController@updateOne');