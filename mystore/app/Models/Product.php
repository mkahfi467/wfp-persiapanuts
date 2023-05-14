<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // WEEK 4
    public function category() {
        // Laravel 7
        // return $this->belongsTo('App\Models\Category', 'category_id');
        
        return $this->belongsTo(Category::class, 'category_id');
    }
}
