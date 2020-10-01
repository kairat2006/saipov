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

Route::get('/', 'App\Http\Controllers\HomeController@index')->name('index');



Route::get('/admin/login', 'App\Http\Controllers\Admin\AdminRegController@showLogForm')->name('admin.login');
Route::post('/admin/login', 'App\Http\Controllers\Admin\AdminRegController@login')->name('admin.login.submit');

Route::get('/admin/register', 'App\Http\Controllers\Admin\AdminRegController@showRegForm')->name('admin.register');
Route::post('/admin/register', 'App\Http\Controllers\Admin\AdminRegController@register')->name('admin.register.submit');

Route::get('/admin', 'App\Http\Controllers\Admin\AdminRegController@home')->name('admin.dashboard');

Route::get('/admin/logout', 'App\Http\Controllers\Admin\AdminRegController@logout')->name('admin.logout');



Route::get('/student/login', 'App\Http\Controllers\Student\StudentController@showLogForm')->name('student.login');
Route::post('/student/login', 'App\Http\Controllers\Student\StudentController@login')->name('student.login.submit');

Route::get('/student/register', 'App\Http\Controllers\Student\StudentController@showRegForm')->name('student.register');
Route::post('/student/register', 'App\Http\Controllers\Student\StudentController@register')->name('student.register.submit');

Route::get('/student', 'App\Http\Controllers\Student\StudentController@home')->name('student.dashboard');
Route::get('/student', 'App\Http\Controllers\Student\StudentController@show')->name('student.dashboard');
Route::get('/student/logout', 'App\Http\Controllers\Student\StudentController@logout')->name('student.logout');



Route::get('/test', 'App\Http\Controllers\Student\StudentController@show');





