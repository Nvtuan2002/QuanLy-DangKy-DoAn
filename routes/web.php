<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Response;


Route::get('/', function () {
   return view('login');
})->name('login');

Route::prefix('student')->name('student.')->group(function () {

   Route::get('/dashboard', function () {
      return view('students.dashboard');
   })->name('dashboard');

   Route::get('/groupSV', function () {
      return view('students.groupSV');
   })->name('groupSV');

   Route::get('/groupSV_update', function () {
      return view('students.groupSV_update');
   })->name('groupSV_update');

   Route::get('/groupSV_detail', function () {
      return view('students.groupSV_detail');
   })->name('groupSV_detail');

   Route::get('/groupSV_request', function () {
      return view('students.groupSV_request');
   })->name('groupSV_request');

   Route::get('/register', function () {
      return view('students.register');
   })->name('register');

   Route::get('/register_attend', function () {
      return view('students.register_attend');
   })->name('register_attend');

   Route::get('/register_create', function () {
      return view('students.register_create');
   })->name('register_create');

   Route::get('/calendar', function () {
      return view('students.calendar');
   })->name('calendar');

   Route::get('/contact', function () {
      return view('students.contact');
   })->name('contact');

   Route::get('/infoStudent', function () {
      return view('students.infoStudent');
   })->name('infoStudent');

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






