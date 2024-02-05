<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $fillable = [
        'reference',
        'name',
        'brand',
        'ean_code',
        'stock',
        'stock_min',
        'description',
        'comment',
        'statut'
    ];

    protected $cast = [
        'is_active' => 'boolean',
        'buying_price' => PriceCasts::class,
        'selling_price' => PriceCasts::class,
    ];

    public function documents()
    {
        return $this->belongsToMany(Document::class, 'document_product');
    }
}
