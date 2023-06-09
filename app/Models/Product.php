<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
   
   /**
     *
     * @var array
     */
    protected $fillable = ['name', 'slug', 'description', 'price', 'category_id', 'quantity', 'image', 'active'];


    

    
}