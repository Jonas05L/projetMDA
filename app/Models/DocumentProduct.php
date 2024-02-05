<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DocumentProduct extends Model
{
    use HasFactory;

    protected $table = 'document_product';

    protected $fillable = [
        'document_id',
        'product_id',
        'quantity',
        'discount',
    ];

    protected $cast = [
        'selling_price' => PriceCasts::class,
        'total' => PriceCasts::class,
        'price_hvat' => PriceCasts::class,
        'price_vvat' => PriceCasts::class,
        'total_hvat' => PriceCasts::class,
    ];
}
