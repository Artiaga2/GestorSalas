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

Route::get('/', 'PagesController@home');
Route::get('/saludo', 'PagesController@saludo');

Route::get('/salas/crear', 'SalasController@create')->middleware('auth');
Route::get('/salas/{id}', 'SalasController@show');
Route::post('/salas/crear', 'SalasController@store')->middleware('auth');
//Route::get('/home', 'HomeController@index');
Route::get('/users/{user}','UsersController@index');
Route::get('/perfil/{user}')



Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
