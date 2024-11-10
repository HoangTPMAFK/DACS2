<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'customer_name',
        'order_code',
        'phone',
        'email',
        'province',
        'district',
        'address',
        'total_price',
        'state',
        'isPaid'
    ];
}