<?php

use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'Vacancy', 'middleware' => ['web', 'auth'], 'prefix' => 'vacancies', 'as' => 'vacancy.'], function () {
    Route::get('', 'VacancyController@index')->name('index');
    Route::get('{uuid}/show', 'VacancyController@show')->name('show');
    Route::post('store','VacancyController@store')->name('store');
    //Route::get('response', 'VacancyController@response')->name('response');

    Route::group(['prefix' => 'datatable', 'as' => 'datatable.'], function () {
        Route::get('processing', 'VacancyController@getJobLists')->name('all');
    });
});
