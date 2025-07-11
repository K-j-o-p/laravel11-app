<?php

use Illuminate\Support\Facades\Route;
use App\Models\Apartment;

Route::get('/', function () {
    return view('home');
});

Route::get('/apartments', function () {
    return view('apartments', [
         'apartments'=>Apartment::all()
    ] );
});

Route::get('/apartments/{id} ', function ($id) {
    
        $apartment = Apartment::find($id);  

          return view('apartment',['apartment' => $apartment]);
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