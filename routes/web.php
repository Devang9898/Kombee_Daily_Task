<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('welcome');
});




// Resource route for StudentController
Route::resource('students', StudentController::class);
