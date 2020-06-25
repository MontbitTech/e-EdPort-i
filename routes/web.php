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

//Admin Class
Route::get('admin/listclass', 'Admin\ClassController@listClass')->name('admin.listclass');

//Admin Content
Route::get('admin/listcontent', 'Admin\ContentController@listContent')->name('admin.listcontent');

//Student Index
Route::get('student/liststudent', 'Student\IndexController@listStudent')->name('admin.liststudent');