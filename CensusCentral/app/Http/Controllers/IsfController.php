<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Models\Isfhead; 
use App\Models\SurveyForms; 
use App\Models\Isfmember; 
use App\Models\householdCondition; 

class IsfController extends Controller
{
    public function store(Request $req)
    {
        // Wrap in a transaction
    DB::beginTransaction();

    try {
        // Validation rules
        $surveyValidate = $req->validate([
            
            'headId' => 'required|numeric|unique:survey_forms,headId',
            'surveyDate' => 'required|date',
            'surveyNo' => 'required|numeric',
            'barangay' => 'required| string',
            'sitioPurok' => 'required|string',
            'interviewerName' => 'required|string',
            'areaClassification' => 'required|string',
        ]);

        $validatedData = $req->validate([

            'lastName' => 'required|string',
            'firstName' => 'required|string',  
            'middleName' => 'nullable|string',
            'maidenName' => 'nullable|string',
            'dateOfBirth' => 'required|date',
            'age' => 'required|numeric',
            'sex' => 'required|string',
            'civilStatus' => 'required|string',
            'occupation' => 'required|string',
            'gender' => 'required|string',
            'communityGroup' => 'required|string',
            'workplace' => 'nullable|string',
            'address' => 'required|string',

            'spouseLname' => 'nullable|string',
            'spouseFname' => 'nullable|string',
            'spouseMname' => 'nullable|string',
            'spouseMaidenName' => 'nullable|string',
            'spouseDOB' => 'nullable|date',
            'spouseAge' => 'nullable|numeric',
            'spouseSex' => 'nullable|string',
            'spouseCommunityGroup' => 'nullable|string',
            'spouseGender' => 'nullable|string',

            'HouseholdClass' => 'required|string',
            'MedicalHistory' => 'required|string',
            'householdSize' => 'required|numeric',
            'yearResidency' => 'required|numeric',
            'IndigenousOrNot' => 'required|string',
            'doubleHousehold' => 'required|string',
            'placeOrigin' => 'required|string',
            'reasonEstablishing' => 'required|string',
            'tenurialStatus' => 'required|string',
            'governmentResettelment' => 'required|string',
            'whichProgram' => 'required|string'
        ]);

        $memberValidated = $req->validate([
            'id' => 'required|numeric',
            'lastName' => 'required|string',
            'firstName' => 'required|string',
            'middleName' => 'nullable|string',
            'relationToHead' => 'required|string',
            'age' => 'required|numeric',
            'gender' => 'required|string',
            'civilStatus' => 'required|string',
            'educAttainment' => 'required|string',
        ]);

        $houseValidated = $req->validate([
            'ownerId' => 'required|unique:household_conditions,ownerId|numeric',
            'houseAge' => 'required|numeric',
            'typeOfStructure' => 'required|string',
            'useOfStructure' => 'required|string',
            'NoOfFloors' => 'required|numeric',
            'typeOfHouse' => 'required|string',
            'EstimatedFloorArea' => 'required|numeric',
            'toiletType' => 'required|string',
            'waterSource' => 'required|string',
            'garbageDisposal' => 'required|string',
            'electricitySource' => 'required|string',
            'modeOfHouse' => 'required|string',
            'relationToOwner' => 'required|string',
        ]);

        // Create and save models
        $surveyForm = SurveyForms::create($surveyValidate);
        $isfHead = Isfhead::create($validatedData);
        $isfmember = Isfmember::create($memberValidated);
        $isfHouseCondition = householdConditions::create($houseValidated);

        // Commit the transaction
        DB::commit();

        // Redirect or return a response (optional)
        return response()->json([
            'surveyForm' => $surveyForm,
            'isfHead' => $isfHead,
            'isfmember' => $isfmember,
            'isfHouseCondition' => $isfHouseCondition,
        ]);

    } catch (\Exception $e) {
        // Rollback the transaction in case of error
        DB::rollBack();
        return response()->json(['error' => $e->getMessage()], 500);
    }
       
    }




    public function update($id, Request $req)
    {
        // Find the model or fail with a 404 error
        $updateISF = Isfhead::findOrFail($id);
    
        // Validation of incoming request data
        $validatedData = $req->validate([
            'lastName' => 'required',
            'firstName' => 'required',
            'middleName' => 'nullable',
            'maidenName' => 'nullable',
            'dateOfBirth' => 'required|date',
            'age' => 'required|numeric',
            'sex' => 'required',
            'civilStatus' => 'required',
            'occupation' => 'required',
            'gender' => 'required',
            'communityGroup' => 'required',
            'workplace' => 'nullable',
            'address' => 'required',
            
            'spouseLname' => 'nullable',
            'spouseFname' => 'nullable',
            'spouseMname' => 'nullable',
            'spouseMaidenName' => 'nullable',
            'spouseDOB' => 'nullable|date',
            'spouseAge' => 'nullable|numeric',
            'spouseSex' => 'nullable',
            'spouseCommunityGroup' => 'nullable',
            'spouseGender' => 'nullable',
    
            'HouseholdClass' => 'required',
            'MedicalHistory' => 'required',
            'householdSize' => 'required|numeric',
            'yearResidency' => 'required|numeric',
            'IndigenousOrNot' => 'required',
            'doubleHousehold' => 'required',
            'placeOrigin' => 'required',
            'reasonEstablishing' => 'required',
            'tenurialStatus' => 'required',
            'governmentResettelment' => 'required',
            'whichProgram' => 'required'
        ]);
    
        // Update the model with the validated data
        $updateISF->update($validatedData);
    
        // Return a JSON response for API or redirect for web applications
        return response()->json(['message' => 'Data updated successfully'], 200);
    }



    public function delete($id)
    {
        $deleteIsf = Isfhead::findOrFail($id);
        


        // Delete the model
        $deleteIsf->delete();
    
        // Redirect with a success message
        return redirect()->back()->with('success', 'Record deleted successfully');
    }
    
    
}
