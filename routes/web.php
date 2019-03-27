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
//Routes for the getting the whole web pages on view root folder
Route::get('/', 'PagesController@getHome')->name('home');
Route::get('about', 'PagesController@getAbout');
Route::get('blog', 'PagesController@getBlog');
Route::get('categories', 'PagesController@getCategories');
Route::get('contact', 'PagesController@getContact');
Route::get('listings', 'PagesController@getListing');
Route::get('places', 'PagesController@getPlaces');