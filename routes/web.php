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

Route::get('/blogs','BlogsController@index')->name('blogs_path');
Route::get('/blogs/create','BlogsController@create')->name('create_blog_path');
Route::post('/blogs','BlogsController@store')->name('store_blog_path');
Route::get('/blogs/{id}','BlogsController@show')->name('blog_path');
Route::get('/blogs/{id}/edit','BlogsController@edit')->name('edit_blog_path');
Route::put('/blogs/{id}','BlogsController@update')->name('update_blog_path');
Route::delete('/blogs/{id}','BlogsController@destroy')->name('delete_blog_path');