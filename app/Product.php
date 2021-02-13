<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'product_name', 'category_id', 'sales_price', 'purchase_price'
    ];
}
