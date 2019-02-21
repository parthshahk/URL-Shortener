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

Route::get('/', 'PagesController@index');

Route::get('/urls', 'UrlsController@index');

Route::get('/u/{id}', 'UrlsController@show');

Route::get('/create', 'PagesController@create');

Route::post('/newurl', array('uses' => 'UrlsController@store'));