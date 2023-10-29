<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
   return view('home');
})->name('home');

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
