<?php

namespace App\Models;
use Illuminate\Support\Arr;

class Apartment{
    public static function all():array{ 

        return [
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
    }

    public static  function find(int $id) :array{

          $apartment= Arr::first(static::all(), fn($apartment)=> $apartment['id']== $id);

             if(!$apartment){
                abort(404);
             }  
             return $apartment;

    }
    
}