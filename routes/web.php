<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'WallController@mainPage');
Route::get('/register', 'WallController@registerPage');
Route::get('/login', 'WallController@loginPage');
Route::get('/success', 'WallController@successRegistrationPage');

Route::post('/store', 'WallController@storePost');
Route::post('/new', 'WallController@registration');
Route::post('/check', 'WallController@login');
Route::get('/out', 'WallController@logout');



