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

Route::get('/', 'Controller@getHome');
Route::get('/students', 'Controller@getStudents');
Route::get('/students/{id}', 'Controller@getStudent');
Route::get('/teachers', 'Controller@getTeachers');
Route::get('/teachers/{id}', 'Controller@getTeacher');
Route::get('/categories/{name}', 'Controller@getCategories');
