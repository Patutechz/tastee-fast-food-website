<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'customer_name',  'customer_email', 'customer_number','product', 'customer_address','status',
    ];
}
