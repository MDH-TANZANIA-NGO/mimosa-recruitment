<?php


use Illuminate\Support\Facades\Route;

Route::get('applications/{hire_requisition_job_id}/applicants', 'Api\Applications\ApplicationController@index')->name('index');

Route::get('applicant/{id}/show', 'Api\Applicant\ApplicantController@show')->name('show');

Route::group(['namespace' => 'Api', 'middleware' => ['api', ''], 'prefix' => 'applications', 'as' => 'application.'], function () {
    Route::get('{application}/show', 'Applications\ApplicationController@show')->name('show');
    Route::put('{application}/update', 'Applications\ApplicationController@update')->name('update');
});

