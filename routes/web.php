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
Route::get('/', 'PagesController@getHome');
Route::get('about', 'PagesController@getAbout');
Route::get('blog', 'PagesController@getBlog');
Route::get('categories', 'PagesController@getCategories');
Route::get('contact', 'PagesController@getContact');
Route::get('listings', 'PagesController@getListing');
Route::get('places', 'PagesController@getPlaces');

//Routes for All Registrations and login
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home'); 

//Routs for Properties
Route::get('/property','PropertiesController@post');
Route::post('/addproperty','PropertiesController@addProperty');
//Routes for Profile
Route::get('/profile','ProfilesController@profile');
Route::post('/addprofile', 'ProfilesController@addProfile');


//Routes for the locations.
Route::get('/location','LocationsController@location');
Route::post('/addlocation','LocationsController@addLocation');

