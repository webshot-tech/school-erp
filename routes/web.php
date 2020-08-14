<?php

use Illuminate\Support\Facades\Route;
use App\Student;
use App\Teacher;
use App\classes;

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
Route::resource('/student', 'StudentController');
Route::resource('/teacher', 'TeacherController');
Route::resource('/class', 'classesController');



Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('can:manage-users')->group(function(){
    Route::resource('/users', 'UserController', ['except'=>['show', 'create', 'store']]);
});

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth', 'admin']], function (){
    Route::get('/views', 'view@viewform');
Route::get('/views', 'view@main');
    Route::get('/view', function () {
        return view('admin.views');


    });

    Route::get('/role-register', 'Admin\DashboardController@registered');
    Route::get('/role-edit/{id}', 'Admin\DashboardController@registeredit');
    Route::put('/role-Decide-update/{id}','Admin\DashboardController@registerupdate');
    Route::delete('/role-delete/{id}', 'Admin\DashboardController@registerdelete');
    Route::get('/search', 'StudentController@search');
Route::get('/search', 'TeacherController@search');
Route::get('/search', 'classesController@search');
    
});
