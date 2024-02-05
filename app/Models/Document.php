<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;

    protected $table = 'documents';

    protected $fillable = [
        'customer_id',
        'documenttype_id',
        'reference',
        'totalhvat',
        'vat',
        'totalttc',
        'status',
        'comment'
    ];

    protected $cast = [
        'totalhvat' => PriceCasts::class,
        'totalttc' => PriceCasts::class,
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function documenttype()
    {
        return $this->belongsTo(Documenttype::class);
    }

    public function products()
    {
        return $this->belongsToMany(Product::class, 'document_product');
    }
}
