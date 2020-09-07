<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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


Route::group(array('middleware' => 'auth'), function()
{
    // all your routes placed in here will be protected by auth.basic
    Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home_page', 'HomePageController@index');
Route::post('/update', 'HomePageController@update');
Route::get('/contact', 'HomePageController@contact');
Route::get('/main', 'HomePageController@main');
Route::post('/mail', 'HomePageController@mail');
});

//Routes without auth goes here

// Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/home_page', 'HomePageController@index');
// Route::post('/update', 'HomePageController@update');
// Route::get('/contact', 'HomePageController@contact');
// Route::get('/main', 'HomePageController@main');
// Route::post('/mail', 'HomePageController@mail');
Auth::routes();