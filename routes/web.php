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

Route::resource('create', 'NewProject');

Route::get('/', 'ProjectsController@index');

Route::get('/new', 'ProjectsController@create');

Route::post('/posts','ProjectsController@store');