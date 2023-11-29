<?php

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

Route::get('/', 'HomeController@index')->name('home')->middleware('verified');

Auth::routes(['verify' => true]);

Route::get('/stream', 'HomeController@stream')->name('stream')->middleware('verified');

Route::group( ['middleware' => ['auth']], function() {
    Route::resource('roles', 'RoleController');
    Route::resource('lessons', 'LessonController')->except('create');
    Route::resource('teachers', TeacherController::class);
    Route::resource('students', StudentController::class);
    Route::resource('courses', 'CourseController');
    Route::get('/lessons/create/{course}', 'LessonController@create')->name('lessons.create');
});


Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});

// ROUTE DASHBOARD ADMIN
Route::get('admin/dashboard', 'AdminController@index')->name('admin.dashboard');
        // 1. Route Lihat Rincian Total Teachers
        Route::get('admin/teachers', 'TeacherController@index')->name('teacher.index');
        // 2. Route Lihat Rincian Total Students
        Route::get('admin/students', 'StudentController@index')->name('dataStudent');
        // 3. Route Lihat Rincian Total Courses
        Route::get('admin/courses', 'CourseController@index')->name('dataCourse');

        // CRUD TEACHER //
        // 1. Create dan Simpan
        Route::get('admin/teachers/create', 'TeacherController@create')->name('createTeacher');
        Route::post('admin/teachers/store', 'TeacherController@store')->name('storeTeacher');
