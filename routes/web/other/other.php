<?php

use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'OtherInfo', 'middleware' => ['web', 'auth'], 'prefix' => 'otherInfo', 'as' => 'otherInfo.'], function () {
    Route::get('', 'OtherInfoController@index')->name('index');
    Route::post('store', 'OtherInfoController@store')->name('store');
    Route::put('{applicant}/update', 'OtherInfoController@update')->name('update');
});
