<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user', 'UsersController@index')
            ->name('users_list');
Route::get('/user/create', 'UsersController@create')
            ->name('form_create_user');
Route::post('/user/add', 'UsersController@store')
            ->name('user_store');
Route::get('/user/update/{id}', 'UsersController@update');
Route::put('/user/update', 'UsersController@refresh');
Route::delete('/user/{id}', 'UsersController@destroy')
        ->name('user_destroy');

Route::post('/user/teste', 'UsersController@teste')
        ->name('user_teste');