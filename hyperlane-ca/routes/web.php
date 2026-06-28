<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about');
Route::view('/careers', 'careers')->name('careers');

//Services
Route::view('/facility-maintenance', 'facility-maintenance')->name('facility-maintenance');


Route::prefix('shuttle')->name('shuttle.')->group(function () {
    Route::view('/', 'pages.services.shuttle.service')->name('service');
    Route::view('/booking', 'pages.services.shuttle.booking')->name('booking');
    Route::view('/login', 'pages.services.shuttle.login')->name('login');

});


//Portal
Route::view('/portal', 'portal')->name('portal');
