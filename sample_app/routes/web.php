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


Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/home','CrudController',['only'=>['index','edit','destroy']]);

Route::resource('/app','CrudController',['only'=>['create']]);

Route::resource('/write','CrudController',['only'=>['create','store']]);

Route::resource('/edit','CrudController',['only'=>['update']]);
