<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
         'apartments'=>[
            [
                'name'=>'Apartment 1',
                'location'=>'Tema',
                'price'=> 100
            ],

            [
                'name'=>'Apartment 2',
                'location'=>'Tema',
                'price'=> 100
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