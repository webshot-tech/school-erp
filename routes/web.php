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

Route::resource('/teafolder','teachersController');
Route::resource('/stufolder','studensController');
Route::resource('/clafolder','classsController');
Route::get('/views','view@viewform');
Route::get('/views','view@main');



Route::get('/', function () {
    return view('welcome');
});
