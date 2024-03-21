<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;

    public function customer()
    {
        return $this->belongsTo(Customers::class);
    }

    protected $fillable = [
        'customer_id',
        'order_date',
        'total_amount',
        'status'
    ];
}
