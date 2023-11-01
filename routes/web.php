<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
   return view('login');
})->name('login');

Route::get('/dashboard', function () {
   return view('dashboard.dashboard');
})->name('dashboard');

// Nhom cua ban
Route::get('/groupSV', function () {
   return view('groups.groupSV');
})->name('groupSV');

Route::get('/groupSV_update', function () {
   return view('groups.groupSV_update');
})->name('groupSV_update');

Route::get('/groupSV_detail', function () {
   return view('groups.groupSV_detail');
})->name('groupSV_detail');

Route::get('/groupSV_request', function () {
   return view('groups.groupSV_request');
})->name('groupSV_request');

Route::get('/register', function () {
   return view('register.register');
})->name('register');

Route::get('/register_attend', function () {
   return view('register.register_attend');
})->name('register_attend');

Route::get('/register_create', function () {
   return view('register.register_create');
})->name('register_create');

Route::get('/calendar', function () {
   return view('calendar.calendar');
})->name('calendar');

Route::get('/contact', function () {
   return view('contact.contact');
})->name('contact');

//Info Edit
Route::get('/infoStudent', function () {
   return view('infoStudent.infoStudent');
})->name('infoStudent');

Route::get('/infoTeacher', function () {
   return view('infoTeacher.infoTeacher');
})->name('infoTeacher');
//Show
Route::get('/infoAllTeacher', function () {
   return view('infoTeacher.infoAllTeacher');
})->name('infoAllTeacher');


//Giảng viên
Route::get('/TE_dashboard', function () {
   return view('TE_dashboard.TE_dashboard');
})->name('TE_dashboard');

Route::get('/register_list', function () {
   return view('TE_register.register_list');
})->name('register_list');

Route::get('/register_wait', function () {
   return view('TE_register.register_wait');
})->name('register_wait');

Route::get('/update', function () {
   return view('TE_update.update');
})->name('update');

Route::get('/update_new', function () {
   return view('TE_update.update_new');
})->name('update_new');

Route::get('/monitor_process', function () {
   return view('TE_monitor_process.monitor_process');
})->name('monitor_process');

Route::get('/monitor_group', function () {
   return view('TE_monitor_process.monitor_group');
})->name('monitor_group');

