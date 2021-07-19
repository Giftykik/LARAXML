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

/*
Route::get('/', function () {
    return view('welcome');
});
*/
//Route::get('/', 'EmployerController@index');

Route::get('/', 'EmployerController@index')->name('index');
Route::post('xml/', 'EmployerController@store')->name('xml.store');
Route::get('dep/{id}', 'EmployerController@show')->name('dep.show');
