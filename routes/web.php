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
// Route::get('/profile', 'MyController@profile');

Route::get('/profile', function() {
   return view('profile');
});

Route::get('/edit_profile', function() {
   return view('edit_profile');
});
Route::post('/edit','HomeController@edit');
Route::get('/delete','HomeController@delete');
Route::get('/logout','HomeController@logout')->name('logout');
