<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class isfmember extends Model
{
    protected $fillable = [
        'id',
        'lastName',
        'firstName',
        'middleName',
        'relationToHead',
        'age',
        'gender',
        'civilStatus',
        'educAttainment',
    ];
}

