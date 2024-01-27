<?php

use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
});


Route::get('/singin', function () {
    return view('singin');
});

Route::get('/singup', function () {
    return view('singup');
});

Route::get('/ads', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/advertisings', function () {
    return view('advertisings');
});

Route::get('/createa_ad', function () {
    return view('createa_ad');
});



//

Route::get('/', function () {
    return redirect('/welcome');
});
