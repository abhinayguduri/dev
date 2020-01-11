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

Route::get('/', 'PagesController@index');
Route::get('/addmenu', 'PagesController@addmenu');
Route::get('/addsubmenu', 'PagesController@addsubmenu');
Route::get('/addpage', 'PagesController@addpage');
Route::resource('menus','MenusController');
Route::resource('submenus','SubmenusController');
Route::resource('pages','ContentControler');
