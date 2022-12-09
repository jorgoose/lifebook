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

Route::get('/introduction', 'App\Http\Controllers\IntroductionController@index');
Route::get('/introduction/1', 'App\Http\Controllers\IntroductionController@page1');
Route::get('/introduction/2', 'App\Http\Controllers\IntroductionController@page2');
Route::get('/introduction/3', 'App\Http\Controllers\IntroductionController@page3');
