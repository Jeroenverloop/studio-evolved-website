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

Route::get('/', 'PageController@home')->name('home');
Route::get('/wat-we-doen', 'PageController@whatWeDo')->name('what-we-do');
Route::get('/klanten', 'PageController@clients')->name('klanten');
Route::get('/over-ons', 'PageController@aboutUs')->name('about-us');
Route::get('/werken-bij', 'PageController@workingAt')->name('working-at');
Route::get('/contact', 'PageController@contact')->name('contact');
