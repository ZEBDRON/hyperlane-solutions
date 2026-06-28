<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about');
Route::view('/careers', 'careers')->name('careers');
Route::view('/facility-maintenance', 'facility-maintenance')->name('facility-maintenance');
