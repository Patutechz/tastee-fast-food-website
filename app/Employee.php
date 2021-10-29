<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [
        'firstname','lastname','address','contact','email','position','avatar','salary'
    ];
}