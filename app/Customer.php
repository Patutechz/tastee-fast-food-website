<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
        'firstname',  'lastname', 'address','contact','email','avatar',
    ];
}
