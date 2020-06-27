<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| All routes specific to admin user goes here
|
*/
// Dashboard
Route::get('admin/dashboard', 'Admin\DashboardController@index')->name('admin.dashboard');
// Classroom
// Teacher
// Timetable
// Student
// Content
// Support
// Setting


/*
|--------------------------------------------------------------------------
| Teacher Routes
|--------------------------------------------------------------------------
|
| All routes specific to teacher user goes here
|
*/
// Dashboard
Route::get('teacher/dashboard', "Teacher\DashboardController@index")->name('teacher.dashboard');
// Lecture
// Examination
// Setting


/*
|--------------------------------------------------------------------------
| Student Routes
|--------------------------------------------------------------------------
|
| All routes specific to student user goes here
|
*/
// Dashboard
Route::get('student/dashboard', 'Student\DashboardController@index')->name('student.dashboard');
//Route::get('student/dashboard', 'Student\DashboardController@index')->name('student.dashboard');
// Lecture
// Examination
// Profile
