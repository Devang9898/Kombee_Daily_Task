<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\StudentController;
//use App\Models\Employee;
use App\Models\Faculty;
use App\Http\Controllers\FacultyController;

Route::get('/', function () {
    return view('welcome');
});




// Resource route for StudentController
/*
Route::resource('students', StudentController::class);
use App\Http\Controllers\UserController;

Route::get('vote', [UserController::class, 'showForm'])->name('vote.form');
Route::post('vote', [UserController::class, 'submitForm'])->name('vote.submit');
Route::resource('employees', EmployeeController::class);*/



Route::get('faculty/create', [FacultyController::class, 'create'])->name('faculty.create');
Route::post('faculty/store', [FacultyController::class, 'store'])->name('faculty.store');



Route::get('faculty/{id}', [FacultyController::class, 'show'])->name('faculty.show');
Route::get('faculty/{id}/edit', [FacultyController::class, 'edit'])->name('faculty.edit');
Route::put('faculty/{id}', [FacultyController::class, 'update'])->name('faculty.update');
