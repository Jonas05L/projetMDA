<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Documenttype extends Model
{
    use HasFactory;

    protected $table = 'documenttypes';

    protected $fillable = [
        'reference',
        'name',
        'description',
        'statut'
    ];

    public function documents()
    {
        return $this->hasMany(Document::class);
    }
}
