<?php

use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'Applicant', 'middleware' => ['web', 'auth'], 'prefix' => 'applicants', 'as' => 'applicant.'], function () {
    Route::get('', 'ApplicantController@index')->name('index');
    Route::post('store', 'ApplicantController@store')->name('store');
    Route::put('{applicant}/update', 'ApplicantController@update')->name('update');
});
