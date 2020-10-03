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
Route::view('/docreg','docreg');
Route::post('/docreg','docreg@store');
Route::view('/userreg','usereg');
Route::post('/userreg','usereg@store');
Route::view('/userlog','userlogin');
Route::view('/doclog','doclogin');
Route::view('/userdash','userdash');
Route::view('/docdash','docdash');
Route::get('/userdash','docreg@display');