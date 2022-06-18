<?php

use Illuminate\Support\Facades\Route;



Route::get('/contact', function () {
    return view('ContactDetails.contact');
});

Route::get('/otherinfo', function () {
    return view('OtherInfo.otherinfo');
});



Route::get('/qualifications', function () {
    return view('Qualifications.qualifications');
});

Route::get('/reference', function () {
    return view('Reference.reference');
});

Route::get('/skills', function () {
    return view('Skills.skills');
});

Route::get('/personalinfo', function () {
    return view('PersonalInfo.create');
});
Route::get('/personal', [App\Http\Controllers\Web\Personal\PersonalController::class, 'index'])->name('personal');
Route::get('/personal.create', [App\Http\Controllers\Web\Personal\PersonalController::class, 'create'])->name('personal.create');
Route::post('/personal.store', [App\Http\Controllers\Web\Personal\PersonalController::class, 'store'])->name('personal.store');
Route::post('/personal.update/{id}', [App\Http\Controllers\Web\Personal\PersonalController::class, 'update'])->name('personal.update');
Route::get('/personal.edit/{personal}', [App\Http\Controllers\Web\Personal\PersonalController::class, 'edit'])->name('personal.edit');
Route::get('/personal.delete/{id}', [App\Http\Controllers\Web\Personal\PersonalController::class, 'delete'])->name('personal.delete');