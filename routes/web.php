<?php

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

Route::get('/','IndexController@index');


Route::resource('/subject','SubjectsController');

Route::resource('/teacher','Admin\TeachersController');

Route::resource('/student','Admin\StudentsController');

Route::get('/about','AboutController@index');

Route::get('/schedule','ScheduleController@index');

Route::get('/schedule/{order}','ScheduleController@grade')->where('order','[0-9]');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
