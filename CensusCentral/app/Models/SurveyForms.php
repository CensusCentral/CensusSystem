<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SurveyForms extends Model
{
    use HasFactory;

    protected $fillable=[

        'houseId',
        'surveyDate',
        'surveyNo',
        'barangay',
        'sitioPurok',
        'interviewerName',
        'areaClassification'
        


    ];
}
