<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user', 'UsersController@index');
Route::get('/user/add', 'UsersController@create');
Route::post('/user/add', 'UsersController@store');
Route::delete('/user/{id}', 'UsersController@destroy');