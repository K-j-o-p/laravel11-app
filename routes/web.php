<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/apartments', function () {
    return view('apartments', [
         'apartments'=>[
            [
                'name'=>'Apartment 1',
                'location'=>'Tema',
                'price'=> 100,
                'description'=>'A beautiful apartment in Tema with morden amenities.'
            ],

            [
                'name'=>'Apartment 2',
                'location'=>'Tema',
                'price'=> 100,
                'description'=>'A beautiful apartment in Tema with morden amenities.'
            ],
         ]
    ] );
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