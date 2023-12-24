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

    // Welcome Page
        // 1. Form Feedback
        Route::get('/feedback/create', 'FeedbackController@create')->name('feedback.create');
        Route::post('/feedback', 'FeedbackController@store')->name('feedback.store');

    Route::get('/teacher', 'TeacherController@index')->name('detailTeacher');

    Route::get('/teacher/{teacher}/edit', 'TeacherController@edit')->name('editTeacher');
    Route::post('/teacher/{teacher}/edit', 'TeacherController@update')->name('updateTeacher');


    // student
    Route::get('/student', 'StudentController@index');
    Route::get('/student/profil', 'StudentController@showProfile')->name('profile.show');
    Route::get('/student/edit', 'StudentController@edit')->name('profile.edit');
    Route::put('/student/updateProfile', 'StudentController@updateProfile')->name('student.updateProfile');
    Route::get('/student/class', 'StudentController@class')->name('profile.class');
    

    //schedule
    Route::get('/schedule', 'SchedulesController@index')->name('detailSchedule');

    Route::get('/schedule/create', 'SchedulesController@create')->name('createSchedule');
    Route::post('/schedule/create', 'SchedulesController@store')->name('storeSchedule');

    Route::get('/schedule/{schedule}/edit', 'SchedulesController@edit')->name('editSchedule');
    Route::post('/schedule/{schedule}/edit', 'SchedulesController@update')->name('updateSchedule');

    Route::get('/schedule/{schedule}/delete', 'SchedulesController@destroy')->name('deleteSchedule');
