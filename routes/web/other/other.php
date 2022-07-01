<?php

use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'OtherInfo', 'middleware' => ['web', 'auth'], 'prefix' => 'other', 'as' => 'other.'], function () {
    Route::get('', 'OtherInfoController@index')->name('index');
    Route::post('store', 'OtherInfoController@store')->name('store');
    Route::put('{other}/update', 'OtherInfoController@update')->name('update');
});
