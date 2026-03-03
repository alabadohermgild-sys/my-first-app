<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// THIS PART IS CRITICAL
Route::get('/weather', function () {
    return view('weather');
});