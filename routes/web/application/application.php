<?php

use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'Application', 'middleware' => ['web', 'auth'], 'prefix' => 'applications', 'as' => 'application.'], function () {
    Route::get('', 'ApplicationController@index')->name('index');
    Route::get('create', 'ApplicationController@create')->name('create');
    Route::post('store', 'ApplicationController@store')->name('store');
    Route::get('{application}/show', 'ApplicationController@show')->name('show');
    Route::put('{application}/update', 'ApplicationController@update')->name('update');

    Route::group(['prefix' => 'datatable', 'as' => 'datatable.'], function () {
        Route::get('all', 'ApplicationController@allDatatable')->name('all');
    });


});
