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


Route::get('/login', 'LoginController@showLogin')->name('show_login');

Route::post('/login', 'LoginController@login')->name('user_login');

Route::get('/blog', 'BlogController@showBlog')->name('show_blog');

Route::get('/logout', 'LogoutController@logout')->name('user_logout');
