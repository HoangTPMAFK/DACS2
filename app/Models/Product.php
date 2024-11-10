<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_name',
        'thumbnail',
        'slug_vi',
        'category',
        'vendor',
        'edition',
        'color',
        'price',
        'description',
        'images'
    ];
    public function getCategory() {
        return $this->hasOne(Category::class, 'slug_vi', 'category');
    }
}
