<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ProfileController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [ProfileController::class, 'ShowAllUsers'])->name('AllUsers');

Route::get('/course/{course}', [CourseController::class, 'ShowAllUsersInCourse'])->name('viewCourse');

Route::get('/profile/{user}', [UserController::class, 'ShowUserProfile'])->name('viewProfile');
