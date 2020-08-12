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
    return view('home');
});

Route::view('Register', 'create');
Route::post('insert', 'StudentController@store');
Route::get('Display', 'StudentController@index');
Route::view('TeacherRegister', 'create_teach');
Route::post('Teacher', 'TeacherController@store');
Route::get('TeacherDisplay', 'TeacherController@index');
Route::view('ClassRegister', 'create_class');
Route::post('Class', 'RoomController@store');
Route::get('ClassDisplay', 'RoomController@index');
Route::get('AdminDisplay', 'AdminController@index');
