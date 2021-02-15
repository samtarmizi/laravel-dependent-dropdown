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

Route::get('/', 'App\Http\Controllers\AjaxController@index');
Route::post('get-states-by-country', 'App\Http\Controllers\AjaxController@getState')->name('get:states');
Route::post('get-cities-by-state', 'App\Http\Controllers\AjaxController@getCity')->name('get:cities');
