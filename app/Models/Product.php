<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function inventory(){
        return $this->hasOne(Inventory::class);
    }

    public function images(){
        return $this->hasMany(ProductImage::class);
    }
}
