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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

//parents
Route::get('/parents','parentscontroller@create');
Route::get('/inputparents','parentscontroller@input');
Route::post('/inputparents','parentscontroller@store');
Route::get('/editparents/{id}/edit','parentscontroller@edit');
Route::PUT('/editparents/{id}','parentscontroller@update');
Route::DELETE('/deleteparents/{id}/delete','parentscontroller@destroy');

//students
Route::get('/students','studentscontroller@create');
Route::get('/inputstudents','studentscontroller@input');
Route::post('/inputstudents','studentscontroller@store');
Route::get('/editstudents/{id}/edit','studentscontroller@edit');
Route::PUT('/editstudents/{id}','studentscontroller@update');
Route::DELETE('/deletestudents/{id}/delete','studentscontroller@destroy');
