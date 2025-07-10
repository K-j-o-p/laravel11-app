<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/properties', function () {
    return view('properties');
});

Route::get('/property', function () {
    return view('property');
});


Route::get('/reservation', function () {
    return view('reservation');
});