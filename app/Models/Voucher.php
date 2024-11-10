<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voucher extends Model
{
    use HasFactory;
    protected $fillable = [
        'voucher_code', 
        'start_at', 
        'end_at', 
        'allProduct', 
        'productsList', 
        'discountAmount', 
        'unit', 
        'maxDiscount'
    ];
}
