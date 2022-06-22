<?php

use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'Skill', 'middleware' => ['web', 'auth'], 'prefix' => 'skills', 'as' => 'skills.'], function () {
    Route::get('', 'SkillController@index')->name('index');
    Route::get('create', 'SkillController@create')->name('create');
    Route::post('store', 'SkillController@store')->name('store');
    Route::get('{userSkill}/show', 'SkillController@show')->name('show');
    Route::put('{userSkill}/update', 'SkillController@update')->name('update');
    Route::get('{id}/skill', 'SkillController@byCategory')->name('by_category');


    Route::group(['prefix' => 'datatable', 'as' => 'datatable.'], function () {
        Route::get('all', 'SkillController@allDatatable')->name('all');
    });
});
