<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'full_name',
        'email',
        'phone',
        'address',
        'city',
        'postal_code',
        'notes',
        'payment_method',
        'products',
    ];
}

