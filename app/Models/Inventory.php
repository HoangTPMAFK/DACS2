<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    use HasFactory;

    protected $table = 'inventory';
    protected $fillable = [
        'product_id',
        'agency_id',
        'quantity'
    ];
    public function getProduct() {
        return $this->hasOne(Product::class, 'id', 'product_id');
    }
    public function getAgency() {
        return $this->hasOne(Agency::class, 'id', 'agency_id');
    }
}
