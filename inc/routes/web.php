<?php

use Illuminate\Support\Facades\Route;

Route::get('/','CoronaController@index')->name('home');
Route::get('world-wide','CoronaController@worldwide')->name('world-wide');
Route::get('prevention','CoronaController@prevention')->name('prevention');
Route::get('bangladesh','CoronaController@bangladesh')->name('bangladesh');
