<?php

use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'Listing', 'middleware' => ['web', 'auth'], 'prefix' => 'listings', 'as' => 'listing.'], function () {
    Route::get('', 'ListingController@index')->name('index');
    Route::post('store', 'ListingController@store')->name('store');
    Route::put('{applicant}/update', 'ListingController@update')->name('update');
    Route::get('preview', 'ListingController@preview')->name('preview');
//    Route::get('saveJobs', 'ListingController@save')->name('save');

    //Datatable
    Route::group(['prefix' => 'datatable', 'as' => 'datatable.'], function () {
        Route::get('all', 'ListingController@all')->name('all');
    });

});
