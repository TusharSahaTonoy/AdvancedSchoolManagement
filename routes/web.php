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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('welcome');
});


// ------------------------ User ------------------------------//
//login
Route::get('login', "Auth\LoginController@showLoginForm")->name('login');
Route::post('login', "Auth\LoginController@login");
//logout
Route::post('logout', "Auth\LoginController@logout");
//profile
Route::get('/profile','UserController@profile');

//-------------------------- admin -----------------------//
Route::get('admin/add', "AdminController@add_admin_form");
Route::post('admin/add', "AdminController@add_admin");

// all admin
Route::get('admin/all','AdminController@admin_list');

// all user
Route::get('user/all','AdminController@user_list');

/* ------------------------ Teacher ------------------ */

Route::get('teacher/list','TeacherController@teacher_list');

Route::get('teacher/add', "TeacherController@add_teacher_form");
Route::post('teacher/add', "TeacherController@add_teacher");

/* ------------------------ student ----------------------- */
Route::get('student/all','StudentController@all_students');

Route::get('student/add', 'StudentController@add_student_form');
Route::post('student/add', 'StudentController@add_student');

/* ------------------------ Class ------------------------ */
// all classes
Route::get('class/all-classes','ClassController@all_classes');

//get all section ajax
Route::get('class/get-sections-ajax','ClassController@get_sections_ajax');

// add section
Route::get('class/add-section','ClassController@add_class_section_form');
Route::post('class/add-section','ClassController@add_class_section');

// add subject
Route::get('class/add-subject','ClassController@add_class_subject_form');
Route::post('class/add-subject','classController@add_class_subject');

// assign class teacher
Route::get('class/assign-class-teacher/{class}','ClassController@assign_class_teacher_form');
Route::post('class-teachers/assign-class-teacher','ClassController@assign_class_teacher');

//assign subject teacher
Route::get('class/assign-subject-teacher','ClassController@assign_subject_teacher_form');
Route::post('class/assign-subject-teacher','ClassController@assign_subject_teacher');

/* ----------------------- attendance -------------------- */
Route::get('attendance','AttendanceController@all_attendance_classes');
Route::get('attendance/{section}','AttendanceController@take_attendance_form');
Route::post('attendance/store', 'AttendanceController@store_attendence');

/* ------------------------ Mark ----------------- */
Route::get('mark/mark-report','MarkController@student_mark_report');

Route::get('mark/all-subjects','MarkController@all_subjects');
Route::get('mark/{subject}/student-list','MarkController@student_list');
Route::post('mark/store','MarkController@store_marks');

/* ----------------------- Result ------------------ */
Route::get('result','ResultController@result');

//class
Route::get('result/class/{class}','ResultController@class_result');

Route::get('result/student','ResultController@student_result');