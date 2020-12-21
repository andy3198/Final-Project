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


Route::get('/', function () {
    return view('home');
});

Route::get('/user', 'UserController@index');
Route::post('/user', 'UserController@store');
Route::get('/user/create', 'UserController@create');

Route::get('/instructor', 'InstructorController@index');
Route::get('/instructor/create', 'InstructorController@create');

Route::get('/learner', 'LearnerController@index');

Route::get('/course', 'CourseController@index');
*/
Route::get('/', function () {
    return view('home');
});

Route::get('/users', 'UserController@index');
Route::post('/users', 'UserController@store');
Route::patch('/users/{id}', 'UserController@update');
Route::get('/users/create', 'UserController@create');
Route::get('/users/edite/{id}', 'UserController@edite');
Route::delete('/users', 'UserController@delete');

Route::get('/instructors', 'InstructorController@index');
Route::post('/instructors', 'InstructorController@store');
Route::patch('/instructors/{user_id}', 'InstructorController@update');
Route::get('/instructors/create', 'InstructorController@create');
Route::get('/instructors/edite/{user_id}', 'InstructorController@edite');
Route::delete('/instructors', 'InstructorController@delete');

Route::get('/learners', 'LearnerController@index');
Route::post('/learners', 'LearnerController@store');
Route::patch('/learners/{user_id}', 'LearnerController@update');
Route::get('/learners/create', 'LearnerController@create');
Route::get('/learners/edite/{user_id}', 'LearnerController@edite');
Route::delete('/learners', 'LearnerController@delete');

Route::get('/courses', 'CourseController@index');
Route::post('/courses', 'CourseController@store');
Route::patch('/courses/{id}', 'CourseController@update');
Route::get('/courses/create', 'CourseController@create');
Route::get('/courses/edite/{id}', 'CourseController@edite');
Route::delete('/courses', 'CourseController@delete');
