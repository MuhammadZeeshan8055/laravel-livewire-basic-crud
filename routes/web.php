<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/register', function () {
    return view('register');
})->name('register');


Route::get('/students', function () {
    return view('students');
});