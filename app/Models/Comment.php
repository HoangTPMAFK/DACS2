<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $fillable = [
        'customer_id', 
        'product_id', 
        'rating', 
        'title', 
        'content'
    ];
    public function getUser() {
        return $this->hasOne(User::class, 'id', 'customer_id');
    }
}
