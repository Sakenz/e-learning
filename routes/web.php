<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\CoursePageController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

    // Dashboard route
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Courses route
    Route::get('/courses', [CourseController::class, 'index'])->name('courses');
    Route::get('/courses/create', [CourseController::class, 'create'])->name('courses.create');
//    Route::get('/courses/{course}/play', [CourseController::class, 'play'])->name('courses.play');
    Route::get('/courses/{course}/add-page', [CoursePageController::class, 'addPage'])->name('courses.addPage');
    Route::get('/courses/{course}/pages/create', [CoursePageController::class, 'create'])->name('course_pages.create');
    Route::get('/courses/{course}', [CourseController::class, 'show'])->name('courses.show');
    Route::post('courses/{course}/pages', [CoursePageController::class, 'store'])->name('course_pages.store');

    Route::get('/courses/{course}/pages/{page?}', [CoursePageController::class, 'show'])->name('course_pages.show');

});

