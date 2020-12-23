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



Route::get('/home', 'HomeController@index')->name('home');



Route::get('/student', 'HomeController@students')->name('student');
Route::get('/aboutus', 'HomeController@about')->name('about');
Route::get('/chart', 'HomeController@chart')->name('chart');
Route::get('/studentview', 'HomeController@studentview')->name('studentview');
Route::get('/readmore', 'HomeController@readmore')->name('readmore');
Route::get('/readmore1', 'HomeController@readmore1')->name('readmore1');

Route::post('/student', 'HomeController@students')->name('student');
