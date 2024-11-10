<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemInOrder extends Model
{
    use HasFactory;
    protected $table = "items_in_order";
    protected $fillable = [
        'order_code',
        'product_id',
        'agency_id',
        'quantity'
    ];
    public function getProduct() {
        return $this->hasOne(Product::class, 'id', 'product_id');
    }
}
