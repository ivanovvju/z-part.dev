<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'id_provider', 'catalog_number', 'manufacturer', 'quantity', 'price', 'min_order_time', 'max_order_time', 'price_order'];
    public $timestamps = true;
}
