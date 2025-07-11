<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/apartments', function () {
    return view('apartments', [
         'apartments'=>[
            [    
                'id'=> 1,
                'name'=>'Apartment 1',
                'location'=>'Tema',
                'price'=> 100,
                'description'=>'A beautiful apartment in Tema with morden amenities.'
            ],

            [
                'id'=> 2,
                'name'=>'Apartment 2',
                'location'=>'Tema',
                'price'=> 100,
                'description'=>'A beautiful apartment in Tema with morden amenities.'
            ],
         ]
    ] );
});

Route::get('/apartments/{id} ', function ($id) {
    $apartments =[
            [    
                'id'=> 1,
                'name'=>'Apartment 1',
                'location'=>'Tema',
                'price'=> 100,
                'description'=>'A beautiful apartment in Tema with morden amenities.'
            ],

            [
                'id'=> 2,
                'name'=>'Apartment 2',
                'location'=>'Tema',
                'price'=> 100,
                'description'=>'A beautiful apartment in Tema with morden amenities.'
            ],
        ];
         $apartment =  \Illuminate\Support\Arr::first($apartments, fn($apartment)=> $apartment['id']== $id);

          return view('apartment',['apartment'=> $apartment]);
});

Route::get('/properties ', function () {
    return view('properties');
});

Route::get('/property', function () {
    return view('property');
});


Route::get('/reservation', function () {
    return view('reservation');
});