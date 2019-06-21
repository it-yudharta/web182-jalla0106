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
route::get ('/santri','santricontroller@index');
route::post('/santri/create','santriController@create');
route::get('/santri/{id}/edit','santriController@edit');
route::post('/santri/{id}/update','santriController@update');
route::get('/santri/{id}/delete','santriController@delete');