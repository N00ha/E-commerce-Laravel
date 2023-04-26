<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    /**
     *
     * @var array
     */
    protected $fillable = ['name', 'slug', 'description', 'parent_id'];


    

    public function products()
    {
        return $this->hasMany(Product::class);
    }

   


    public function parent()
    {
        return $this->belongsTo(Category::class, 'parent_id');
    }

    


    
}