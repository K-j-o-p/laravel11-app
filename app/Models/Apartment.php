<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Apartment extends Model{
    use HasFactory;
    
   protected $fillable=['name','price','location','description'];
    
}