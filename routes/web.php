<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controller\StudentController;
use App\Http\Controller\CourseController;

Route::get('/', function () {
    return view('welcome');
});
Route::resource('students', StudentController::class);
Route::resource('courses', CourseController::class);