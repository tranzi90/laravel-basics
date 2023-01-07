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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts', '\App\Http\Controllers\PostController@index');

Route::get('/posts/create', '\App\Http\Controllers\PostController@create');
Route::get('/posts/update', '\App\Http\Controllers\PostController@update');
Route::get('/posts/delete', '\App\Http\Controllers\PostController@delete');
