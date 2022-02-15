<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'MyController@home') -> name('home');
Route::get('/get/postcards', 'MyController@getPostcards') -> name('postcards.get');

// create/store
Route::get('/create/postcard', 'MyController@create') -> name('create.postcard');
Route::post('/store/postcard', "myController@store") -> name('store.postcard');
 