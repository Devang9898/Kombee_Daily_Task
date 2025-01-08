<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('welcome');
});




// Resource route for StudentController
Route::resource('students', StudentController::class);
use App\Http\Controllers\UserController;

Route::get('/vote', [UserController::class, 'showForm'])->name('vote.form');
Route::post('/vote', [UserController::class, 'submitForm'])->name('vote.submit');
