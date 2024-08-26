<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Isfhead extends Model
{
    use HasFactory;

    protected $fillable = [

        'surveyId',
        'lastName',
        'firstName',
        'middleName',
        'maidenName',
        'dateOfBirth',
        'age',
        'sex',
        'civilStatus',
        'occupation',
        'workplace',
        'address',
        'communityGroup',
        'gender',
        'disability',

        'spouseLname',
        'spouseFname',
        'spouseMname',
        'spouseMaidenName',
        'spouseDOB',
        'spouseAge',
        'spouseSex',
        'spouseCommunityGroup',
        'spouseGender',
        
        'MedicalHistory',
        'HouseholdClass',
        
        'householdSize',
        'yearResidency',
        'doubleHousehold',
        'indigenousOrNot',
        'placeOrigin',
        'reasonEstablishing',
        'tenurialStatus',
        'governmentResettelment',
        'whichProgram'
    ];
}
