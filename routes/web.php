<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'ConfigurationController@index')->name('index');
Route::get('/create', 'ConfigurationController@create')->name('create');
Route::post('/store', 'ConfigurationController@store')->name('store');
Route::delete('/destroy', 'ConfigurationController@destroy')->name('index');

Route::prefix('group')->name('group.')->group(function () {
    Route::get('/', 'ConfigurationGroupController@index')->name('index');
    Route::get('/create', 'ConfigurationGroupController@create')->name('create');
    Route::post('/store', 'ConfigurationGroupController@store')->name('store');
    Route::delete('/destroy', 'ConfigurationGroupController@destroy')->name('index');
});
