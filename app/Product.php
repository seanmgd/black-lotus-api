<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['slug', 'name', 'family', 'diameter', 'height', 'advantage', 'level', 'pet_friendly', 'sun', 'price', 'image', 'size'];
    public $timestamps = false;
}
