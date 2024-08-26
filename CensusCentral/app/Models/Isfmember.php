<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class isfmember extends Model
{
    protected $fillable = [
        'headId',
        'lastName',
        'firstName',
        'middleName',
        'maidenName',
        'sex',
        'DOB',
        'age',
        'civilStatus',
        'memberOccupation',
        'placeOfWork',
        'relationToHead',
        'memberOfCommunityGroup',
        'anyDisability',
        'genderIdentification',
        'educAttaintment',
    ];
}

