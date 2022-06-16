<?php

use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'Applicant', 'middleware' => ['web', 'auth'], 'prefix' => 'applicants', 'as' => 'applicant.'], function () {
    Route::get('', 'ApplicantController@index')->name('index');
    Route::get('create', 'ApplicantController@create')->name('create');
    Route::post('store', 'ApplicantController@store')->name('store');
    Route::get('{applicant}/show', 'ApplicantController@show')->name('show');
    Route::put('{applicant}/update', 'ApplicantController@update')->name('update');

    Route::group(['prefix' => 'datatable', 'as' => 'datatable.'], function () {
        Route::get('all', 'ApplicantController@allDatatable')->name('all');
    });


});
