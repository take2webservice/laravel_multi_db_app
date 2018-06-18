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
    return view('form');
});

Route::get('/list', 'SubmitController@list');
Route::get('/list/docker1', 'SubmitController@list_docker1');
Route::get('/list/docker2', 'SubmitController@list_docker2');
Route::post('/submit', 'SubmitController@post');

