<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_name',
        'category',
        'price',
        'stok',
        'foto1',
        'foto2',
        'foto3',
        'deskripsi'
    ];
}
