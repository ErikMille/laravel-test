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

Route::get('/', 'IndexController@index');

Route::get('/contact', 'ContactController@contact');

Route::get('/product/sword', 'ProductController@show');



Route::get('/continents/europe', 'ContinentController@Europe');

Route::get('/countries/detail', 'CountryController@detail');