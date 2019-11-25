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

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/student{id}','StudentController@getInfo');

Route::post('addInfo','StudentController@addInfo');

Route::get('getList{stdBranch}','StudentController@getList');

Route::get('editData{id}','StudentController@editData');

Route::post('addnewdata','StudentController@addnewdata');


//----------------------------------------------------------------
Route::get('/teacher{id}','TeacherController@getInfo');

Route::post('addDataT','TeacherController@addDataT');

Route::get('fishList','TeacherController@fishList');

Route::get('enviList','TeacherController@enviList');

Route::get('foodList','TeacherController@foodList');

Route::get('sportList','TeacherController@sportList');

Route::get('cisList','TeacherController@cisList');

Route::get('delList{id}','TeacherController@delList');

Route::get('editInfo{id}','TeacherController@editInfo');

Route::post('newInfo','TeacherController@newInfo');
