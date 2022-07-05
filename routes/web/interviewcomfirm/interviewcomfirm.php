<?php

use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'InterviewComfirm', 'middleware' => ['web', 'auth'], 'prefix' => 'interviewcomfirm', 'as' => 'interviewcomfirm.'], function () {
    Route::get('', 'InterviewComfirmController@index')->name('index');
});
