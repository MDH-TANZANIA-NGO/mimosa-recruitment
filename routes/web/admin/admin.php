<?php

use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'Admin', 'middleware' => ['web', 'auth'], 'prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('', 'AdminController@index')->name('index');
    Route::post('store', 'AdminController@store')->name('store');
    Route::put('{applicant}/update', 'AdminController@update')->name('update');
    Route::get('preview', 'AdminController@preview')->name('preview');
    Route::get('saveJobs', 'AdminController@save')->name('save');

});
