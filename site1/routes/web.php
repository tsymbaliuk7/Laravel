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

Route::get('/', 'MyController@getMain');

Route::get('/signin', 'MyController@getRegistr');

Route::post('/signin', 'MyController@postRegistr');


Route::get('/users', 'MyController@getUsers');

Route::get('/users/{id}', 'MyController@getUserId');
