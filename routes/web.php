<?php


    use App\Http\Controllers\Admin\UserController;

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

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');
Route::get('/', 'WelcomeController@index')->name('welcome');

Auth::routes(['verify' => true]);

Route::get('/stream', 'HomeController@stream')->name('stream')->middleware('verified');

Route::group( ['middleware' => ['auth']], function() {
    Route::resource('courses', 'CourseController');
    Route::resource('roles', 'RoleController');
    Route::resource('lessons', 'LessonController')->except('create');
    Route::get('/lessons/create/{course}', 'LessonController@create')->name('lessons.create');
});


    Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
        \UniSharp\LaravelFilemanager\Lfm::routes();
    });

    // ADMIN
    Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
        Route::get('/users', 'UserController@index')->name('users.index');
    });


    // MULTI ROLE
    // 1. View Courses
    Route::get('/view/courses', 'ViewCourseController@index')->name('viewcourses.index');

// Welcome Page
    // 1. Form Feedback
    Route::get('/feedback/create', 'FeedbackController@create')->name('feedback.create');
    Route::post('/feedback', 'FeedbackController@store')->name('feedback.store');

    Route::get('/teacher', 'TeacherController@index')->name('detailTeacher');
    Route::get('/teacher/{teacher}/edit', 'TeacherController@edit')->name('editTeacher');
    Route::post('/teacher/{teacher}/edit', 'TeacherController@update')->name('updateTeacher');


    // student
    Route::get('/student', 'StudentController@index')->name('student.dashboard');
    Route::get('/student/profil', 'StudentController@showProfile')->name('profile.show');
    Route::get('/student/edit', 'StudentController@edit')->name('profile.edit');
    Route::put('/student/updateProfile', 'StudentController@updateProfile')->name('student.updateProfile');
    Route::get('/student/class', 'StudentController@class')->name('profile.class');
    Route::get('/student/attendance', 'StudentController@attendance')->name('student.attendance');
    Route::get('/student/grade', 'StudentController@grade')->name('student.grade');


    //schedule
    Route::get('/schedule', 'SchedulesController@index')->name('detailSchedule');

Route::get('/schedule/create', 'SchedulesController@create')->name('createSchedule');
Route::post('/schedule/create', 'SchedulesController@store')->name('storeSchedule');

Route::get('/schedule/{schedule}/edit', 'SchedulesController@edit')->name('editSchedule');
Route::post('/schedule/{schedule}/edit', 'SchedulesController@update')->name('updateSchedule');

Route::get('/schedule/{schedule}/delete', 'SchedulesController@destroy')->name('deleteSchedule');

// SideBar

    // 1. Profile
    Route::get('/profile', 'ProfileController@show')->name('profile.show');
    Route::get('/profile/edit', 'ProfileController@edit')->name('profile.edit')->middleware('auth');
    Route::put('/profile/update', 'ProfileController@update')->name('profile.update')->middleware('auth');

//Learning
Route::get('/learning', 'LearningController@index')->name('detailLearning');
Route::get('/learning/create', 'LearningController@create')->name('createLearning');
Route::post('/learning/create', 'LearningController@store')->name('storeLearning');
Route::get('/learning/{learning}/edit', 'LearningController@edit')->name('editLearning');
Route::post('/learning/{learning}/edit', 'LearningController@update')->name('updateLearning');
Route::get('/learning/{learning}/delete', 'LearningController@destroy')->name('deleteLearning');

//class name
Route::get('/kelas', 'KelasController@index')->name('detailKelas');
Route::get('/kelas/create', 'KelasController@create')->name('createKelas');
Route::post('/kelas', 'KelasController@store')->name('kelas.store');
Route::get('/kelas/{kelas}/edit', 'KelasController@edit')->name('editKelas');
Route::post('/kelas/{kelas}/edit', 'KelasController@update')->name('updateKelas');
Route::get('/kelas/{kelas}/delete', 'KelasController@destroy')->name('deleteKelas');

// //Attendances
// Route::resource('attendances', AttendanceController::class);
// // Route::get('/attendances', [AttendanceController::class, 'index'])->name('attendances.index');
// // Route::get('/attendances/create', [AttendanceController::class, 'create'])->name('attendances.create');
// // Route::post('/attendances', [AttendanceController::class, 'store'])->name('attendances.store');
// // Route::get('/attendances/{attendance}/edit', [AttendanceController::class, 'edit'])->name('attendances.edit');
// // Route::put('/attendances/{attendance}', [AttendanceController::class, 'update'])->name('attendances.update');
// // Route::delete('/attendances/{attendance}', [AttendanceController::class, 'destroy'])->name('attendances.destroy');
