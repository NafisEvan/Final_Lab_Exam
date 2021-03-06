<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// User Routes

Route::get('/login', 'UserController@loginView');
Route::post('/login', 'UserController@login');
Route::get('/register', 'registrationController@registration')->name('registration.registration');
Route::post('/register', 'registrationController@postRegistration')->name('registration.registration');