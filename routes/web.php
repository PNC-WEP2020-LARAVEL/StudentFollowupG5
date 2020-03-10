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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('showstudent', 'StudentController@index')->name('showstudent');
Route::get('showform', 'StudentController@create')->name('showform');
Route::get('back', 'StudentController@backForm')->name('back');
Route::post('addstudent', 'StudentController@store')->name('save');
Route::get('showformedit/{id}', 'StudentController@edit')->name('edit');
Route::put('editstudent/{id}', 'StudentController@update')->name('editstudent');
