<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/theme', function () {
    return view('layouts.theme');
});



Route::get('/add-school', function () {
    return view('school.create_school');
});
