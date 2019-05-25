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

/*
|
| Basic authorisation routes for the application.
| If you want password resets to work you have to set up the mail
| driver, see (Jombo, 2019) to set your .env up with Mailtrap for
| testing purposes.
|
*/
Auth::routes();

Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@about');
Route::get('/bibliography', 'PagesController@bibliography');
Route::get('/documentation', 'PagesController@documentation');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/lessons', 'LessonsController@index');
Route::get('/lessons/{lesson}', 'LessonsController@show');

/*Route::get('/home', 'PagesController@home');*/
