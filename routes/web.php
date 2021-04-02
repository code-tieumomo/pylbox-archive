<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'HomeController@index')->name('home.index');
Route::get('/detail', 'ItemController@show')->name('items.show');
Route::get('/add-new-item', 'ItemController@create')->name('items.create');
Route::post('/add-new-item', 'ItemController@store')->name('items.store');
