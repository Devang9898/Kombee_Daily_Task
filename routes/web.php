<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\StudentController;
//use App\Models\Employee;
use App\Models\Faculty;
use App\Http\Controllers\FacultyController;
use App\Http\Controllers\BookController;

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
use App\Http\Controllers\AdminAuthController;

// Admin authentication routes
Route::get('/admin/login', [AdminAuthController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [AdminAuthController::class, 'login'])->name('admin.login.submit');
Route::get('/admin/register', [AdminAuthController::class, 'showRegisterForm'])->name('admin.register');
Route::post('/admin/register', [AdminAuthController::class, 'register'])->name('admin.register.submit');
Route::post('/admin/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');

// Admin dashboard route, accessible only to authenticated admins
Route::middleware(['auth.admin'])->group(function () {
    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');
});
Route::get('/books', [BookController::class, 'index']);