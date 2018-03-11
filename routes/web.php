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

Route::get('/', 'SalasController@tabla');
Route::get('/saludo', 'PagesController@saludo');

//Route::get('/home', 'HomeController@index');
Route::delete('/salas/{sala}', 'SalasController@destroy')->name('salas.delete');

Auth::routes();

Route::group(['middleware' => 'auth'], function() {

    Route::get('/crear', 'SalasController@create');
    Route::get('/alquiler', 'SalasController@create');
    Route::get('/salas/{id}', 'SalasController@show');
    Route::post('/crear', 'SalasController@store');
    Route::get('/{user}','UsersController@show');
});

//Route::get('/home', 'HomeController@index')->name('home');


