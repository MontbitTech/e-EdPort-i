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
Route::get('admin/classroom', 'Admin\ClassroomController@index')->name('admin.classroom');
// Teacher
Route::get('admin/teacher', 'Admin\TeacherController@index')->name('admin.teacher');
// Timetable
Route::get('admin/timetable', 'Admin\TimetableController@index')->name('admin.timetable');
// Student
Route::get('admin/student', 'Admin\StudentController@index')->name('admin.student');
// Content
Route::get('admin/content', 'Admin\ContentController@index')->name('admin.content');
// Support
Route::get('admin/support', 'Admin\SupportController@index')->name('admin.support');
// Setting
Route::get('admin/setting', 'Admin\SettingController@index')->name('admin.setting');


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
Route::get('teacher/lecture', 'Teacher\LectureController@index')->name('teacher.lecture');
// Examination
Route::get('teacher/examination', 'Teacher\ExaminationController@index')->name('teacher.examination');
// Setting
Route::get('teacher/setting', 'Teacher\SettingController@index')->name('teacher.setting');
// Register
Route::get('teacher/register', 'Teacher\RegisterController@index')->name('teacher.register');
// Login
Route::get('teacher/login', 'Teacher\LoginController@index')->name('teacher.login');

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
// Lecture
Route::get('student/lecture', 'Student\LectureController@index')->name('student.lecture');
// Examination
Route::get('student/examination', 'Student\ExaminationController@index')->name('student.examination');
// Profile
Route::get('student/profile', 'Student\ProfileController@index')->name('student.profile');
// Register
Route::get('student/register', 'Student\RegisterController@index')->name('student.register');
// Login
Route::get('student/login', 'Student\LoginController@index')->name('student.login');


/*
|--------------------------------------------------------------------------
| Principal Routes
|--------------------------------------------------------------------------
|
| All routes specific to student user goes here
|
*/
// Dashboard
Route::get('principal/dashboard', 'Principal\DashboardController@index')->name('principal.dashboard');
//Teacher
Route::get('principal/teacher', 'Principal\TeacherController@index')->name('principal.teacher');
//Setting
Route::get('principal/setting', 'Principal\SettingController@index')->name('principal.setting');
//Student
Route::get('principal/student', 'Principal\StudentController@index')->name('principal.student');
//Support
Route::get('principal/support', 'Principal\SupportController@index')->name('principal.support');
//TimeTable
Route::get('principal/timetable', 'Principal\TimetableController@index')->name('principal.timetable');
//Classroom
Route::get('principal/classroom', 'Principal\ClassroomController@index')->name('principal.classroom');
//Content
Route::get('principal/content', 'Principal\ContentController@index')->name('principal.content');