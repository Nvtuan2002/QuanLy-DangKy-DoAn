<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
   return view('pages.home');
})->name('home');

// Nhom cua ban
Route::get('/groupSV', function () {
   return view('pages.groupSV');
})->name('groupSV');

Route::get('/groupSV_update', function () {
   return view('pages.groupSV_update');
})->name('groupSV_update');

Route::get('/groupSV_detail', function () {
   return view('pages.groupSV_detail');
})->name('groupSV_detail');