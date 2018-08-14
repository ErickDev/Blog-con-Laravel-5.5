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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// Web
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/post/{slug}', 'HomeController@post')->name('post');
Route::get('/category/{slug}', 'HomeController@category')->name('category');
Route::get('/tag/{slug}', 'HomeController@tag')->name('tag');