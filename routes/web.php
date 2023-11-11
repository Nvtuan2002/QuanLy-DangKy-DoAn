<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Response;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\HandleRequest;
use App\Http\Controllers\ProjectController;




use App\Models\Student;

Route::get('/', [LoginController::class, 'getLogin'])->name('login');

Route::post('/', [LoginController::class, 'checkLogin'])->name('checkLogin');

Route::prefix('student')->name('student.')->group(function () {

   Route::get('{/dashboard', [StudentController::class, 'dashboard'])->name('dashboard');

   Route::get('/infoStudent', [StudentController::class, 'getInfoStudent'])->name('infoStudent');

   Route::post('/infoStudent', [StudentController::class, 'updateInfoStudent'])->name('updateInfoStudent');

   // GROUP

   Route::get('/groupSV', [GroupController::class, 'studentGroup'])->name('groupSV');

   Route::get('/groupSV_detail', [GroupController::class, 'getInfoGroup'])->name('groupSV_detail');

   Route::get('/groupSV_update', [GroupController::class,'getUpdateProgress'])->name('groupSV_update');

   Route::get('/dowloadfile/{file_name}', [GroupController::class,'downloadFile'])->name('dowload');


   Route::post('/groupSV_update', [GroupController::class,'handleUpdateFile'])->name('handleUpdateFile');


   Route::get('/registerProject', [TeacherController::class, 'getAllProject'])->name('register');

   Route::get('/registerProject/{p_id}/{t_id}', [StudentController::class, 'requestJoinProject'])->name('requestJoinProject');

   Route::get('/register_attend', [GroupController::class, 'getAllGroup'])->name('register_attend');

   Route::get('/register_attend/{group_id}', [StudentController::class, 'requestJoinGroup'])->name('requestJoinGroup');

   Route::get('/register_create/', [GroupController::class, 'getCreateGroup'])->name('register_create');

   Route::post('/register_create', [GroupController::class,'handleCreateGroup'])->name('handle_create');

   Route::get('/groupSV_request', [GroupController::class,'getRequestJoinGroup'])->name('groupSV_request');

   Route::get('/handleRequest/{id}/{status}', [HandleRequest::class,'handleRequestJoinGroup'])->name('handleRequestJoinGroup_accept');




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
   Route::get('/TE_dashboard', [TeacherController::class,'dashboard'])->name('TE_dashboard');

   Route::get('/register_list', [TeacherController::class,'getAllStudentRegis'])->name('register_list'); 

   Route::get('/register_wait', [TeacherController::class,'getAllStudentRequestProject'])->name('register_wait');

   Route::get('/handleRequestJoinProject/{id}/{status}', [HandleRequest::class,'handleRequestJoinProject'])->name('handleRequestJoinProject');


   Route::get('/updateProject',[ProjectController::class,'getAllProject'] )->name('update');
   
   Route::get('/update_new', [ProjectController::class,'createNewProject'])->name('update_new');

   Route::post('/update', [ProjectController::class,'handleCreateProject'])->name('handleCreate');

   Route::get('/monitor_process', [TeacherController::class,'getObserveGroup'])->name('monitor_process');


   Route::get('/monitor_group/{group_id}', [TeacherController::class,'observeGroup'])->name('monitor_group');

   Route::get('/calendar', function () {
      return view('teachers.calendar');
   })->name('calendar');

   Route::get('/contact', function () {
      return view('teachers.contact');
   })->name('contact');
});
