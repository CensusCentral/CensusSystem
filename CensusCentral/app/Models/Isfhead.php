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
        'gender',
        'communityGroup',
        'workplace',
        'address',

        'spouseLname',
        'spouseFname',
        'spouseMname',
        'spouseMaidenName',
        'spouseDOB',
        'spouseAge',
        'spouseSex',
        'spouseCommunityGroup',
        'spouseGender',

        'HouseholdClass',
        'MedicalHistory',
        'householdSize',
        'yearResidency',
        'IndigenousOrNot',
        'doubleHousehold',
        'placeOrigin',
        'reasonEstablishing',
        'tenurialStatus',
        'governmentResettelment',
        'whichProgram'
    ];
}
