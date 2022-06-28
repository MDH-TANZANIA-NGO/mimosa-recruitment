<?php


use Illuminate\Support\Facades\Route;

Route::get('applications', 'Api\Applications\ApplicationController@index')->name('index');

Route::group(['namespace' => 'Api', 'middleware' => ['api', ''], 'prefix' => 'applications', 'as' => 'application.'], function () {

    Route::get('{application}/show', 'Applications\ApplicationController@show')->name('show');
    Route::put('{application}/update', 'Applications\ApplicationController@update')->name('update');
});

