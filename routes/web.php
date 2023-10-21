<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
   return view('pages.home');
})->name('home');

Route::get('/groupsSV', function () {
   return view('pages.groupsSV');
})->name('groupsSV');