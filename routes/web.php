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
Route::view('/dash', 'dash.dashboard');
Route::view('/home', 'dash.home');
Route::view('/admin', 'admin');
Route::view('/stud', 'student');
Route::view('/teach', 'dash.teacher');
Route::view('/stureg', 'studentreg');
Route::view('/adminreg', 'adminreg');
Route::view('/teachreg', 'teachreg');
Route::view('/studlog', 'studlogin');
Route::view('/tealog', 'tealogin');
Route::view('adminlog', 'adminlogin');
Route::post('student_insert', 'StudentController@store');
Route::post('teacher_insert', 'TeacherController@store');
Route::post('admin_insert', 'AdminController@store');
Route::post('student_login', 'StudentController@login');
Route::post('teacher_login', 'TeacherController@login');
Route::post('admin_login', 'AdminController@login');
Route::view('/studdata','dash.studentdata');
Route::get('/studdata','StudentController@index');
Route::view('/teachdata','dash.teacherdata');
Route::get('/teachdata','TeacherController@index');
