<?php

use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'Address', 'middleware' => ['web', 'auth'], 'prefix' => 'addresses', 'as' => 'address.'], function () {
    Route::get('', 'AddressController@index')->name('index');
    Route::get('create', 'AddressController@create')->name('create');
    Route::post('store', 'AddressController@store')->name('store');
    Route::get('{address}/show', 'AddressController@show')->name('show');
    Route::put('{address}/update', 'AddressController@update')->name('update');

    Route::group(['prefix' => 'datatable', 'as' => 'datatable.'], function () {
        Route::get('all', 'AddressController@allDatatables')->name('all');
    });


});
