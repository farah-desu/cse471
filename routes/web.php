<?php
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dash', function () {
    return view('dash'); 
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/planner', function () {
    return view('planner');
});

Route::get('/notes', function () {
    return view('notes');
});

