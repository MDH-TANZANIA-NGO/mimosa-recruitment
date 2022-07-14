<?php


use Illuminate\Support\Facades\Route;

Route::get('applications/{hire_requisition_job_id}/applicants', 'Api\Applications\ApplicationController@index')->name('index');

Route::get('applicant/{id}/show', 'Api\Applicant\ApplicantController@show')->name('show');
Route::get('applicants/{id}/applicant', 'Api\Applicant\ApplicantController@applicant')->name('applicant');
Route::get('applicant/{id}/resource/{hire_requisition_job_id}', 'Api\Applicant\ApplicantController@resource')->name('resource');
Route::post('applicant/shortlisted', 'Api\Applicant\ApplicantController@shortlistApplicant')->name('applicant_shortlist');
Route::post('applicant/unshortlist', 'Api\Applicant\ApplicantController@unshortlistApplicant')->name('applicant_unshortlist');


Route::group(['namespace' => 'Api', 'middleware' => ['api', ''], 'prefix' => 'applications', 'as' => 'application.'], function () {
    Route::get('{application}/show', 'Applications\ApplicationController@show')->name('show');
    Route::put('{application}/update', 'Applications\ApplicationController@update')->name('update');
});

