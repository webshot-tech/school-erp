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
Route::view('/sign1','signstud');
Route::post('/sign1','student@store');
Route::get('/home','student@index');
Route::view('/sign2','signteach');
Route::post('/sign2','teacher@store');
Route::view('/sign3','signclass');
Route::post('/sign3','claases@store');
Route::get('/admin','student@index1');