<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Response;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TeacherController;
use App\Models\Student;

Route::get('/', [LoginController::class, 'getLogin'])->name('login');

Route::post('/', [LoginController::class, 'checkLogin'])->name('checkLogin');

Route::prefix('student')->name('student.')->group(function () {

   Route::get('{/dashboard', [StudentController::class, 'dashboard'])->name('dashboard');

   Route::get('/infoStudent', [StudentController::class,'getInfoStudent'])->name('infoStudent');

   Route::post('/infoStudent', [StudentController::class,'updateInfoStudent'])->name('updateInfoStudent');


   Route::get('/groupSV', [StudentController::class,'studentGroup'])->name('groupSV');

   Route::get('/groupSV_detail', [StudentController::class,'getInfoGroup'])->name('groupSV_detail');

   Route::get('/registerProject', [TeacherController::class,'getAllProject'])->name('register');

   Route::get('/registerProject/{p_id}/{t_id}', [TeacherController::class,'handleJoinProject'])->name('handleJoinProject');

   Route::get('/register_attend', [StudentController::class,'getAllGroup'])->name('register_attend');

   Route::get('/register_attend/{group_id}', [StudentController::class,'handleJoinGroup'])->name('register_attend');

   
   Route::get('/register_create/', [StudentController::class,'getCreateGroup'])->name('register_create');

   Route::post('/register_create', [StudentController::class,'handleCreateGroup'])->name('handle_create');




   Route::get('/groupSV_update', function () {
      return view('students.groupSV_update');
   })->name('groupSV_update');


   Route::get('/groupSV_request', function () {
      return view('students.groupSV_request');
   })->name('groupSV_request');




   Route::get('/calendar', function () {
      return view('students.calendar');
   })->name('calendar');

   Route::get('/contact', function () {
      return view('students.contact');
   })->name('contact');


   Route::get('/infoTeacher', function () {
      return view('students.infoTeacher');
   })->name('infoTeacher');

   Route::get('/infoAllTeacher', function () {
      return view('students.infoAllTeacher');
   })->name('infoAllTeacher');
});



Route::prefix('teacher')->name('teacher.')->group(function () {

   //Giảng viên
   Route::get('/TE_dashboard', function () {
      return view('teachers.TE_dashboard');
   })->name('TE_dashboard');

   Route::get('/register_list', function () {
      return view('teachers.register_list');
   })->name('register_list');

   Route::get('/register_wait', function () {
      return view('teachers.register_wait');
   })->name('register_wait');

   Route::get('/update', function () {
      return view('teachers.update');
   })->name('update');

   Route::get('/update_new', function () {
      return view('teachers.update_new');
   })->name('update_new');

   Route::get('/monitor_process', function () {
      return view('teachers.monitor_process');
   })->name('monitor_process');

   Route::get('/monitor_group', function () {
      return view('teachers.monitor_group');
   })->name('monitor_group');

   Route::get('/calendar', function () {
      return view('teachers.calendar');
   })->name('calendar');

   Route::get('/contact', function () {
      return view('teachers.contact');
   })->name('contact');
});
