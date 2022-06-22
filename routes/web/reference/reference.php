<?php

use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'Reference', 'middleware' => ['web', 'auth'], 'prefix' => 'references', 'as' => 'reference.'], function () {
    Route::get('', 'ReferenceController@index')->name('index');
    Route::get('create', 'ReferenceController@create')->name('create');
    Route::post('store', 'ReferenceController@store')->name('store');
    Route::get('{reference}/show', 'ReferenceController@show')->name('show');
    Route::put('{reference}/update', 'ReferenceController@update')->name('update');

    Route::group(['prefix' => 'datatable', 'as' => 'datatable.'], function () {
        Route::get('all', 'ReferenceController@allDatatable')->name('all');
    });
});
