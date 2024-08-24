<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Isfhead; 
use App\Models\SurveyForms; 
use App\Models\Isfmember; 
use App\Models\householdCondition; 

class IsfController extends Controller
{
    public function store(Request $req)
    {

        $surveyValidate= $req->validate([

            'houseId'=> 'required|numeric|unique',
            'surveyDate'=> 'required|date',
            'surveyNo'=>'required|numeric',
            'sitioPurok'=>'required',
            'interviewerName'=>'required|string',
            'areaClassification'=> 'required|string'

        ]);

            $surveyForm = new SurveyForm($surveyValidate);
            $surveyForm->save();
            



        // Validation of incoming request data
        $validatedData = $req->validate([
            'lastName' => 'required',
            'firstName' => 'required',  
            'middleName' => 'nullable',
            'maidenName' => 'nullable',
            'dateOfBirth' => 'required',
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
            'spouseDOB' => 'nullable',
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

        // Create and save the new ISF head record
        $isfHead = new Isfhead($validatedData);
        $isfHead->save();

        // Validation of incoming request data
        $memberValidated = $req->validate([
            'id' => 'required',
            'lastName' => 'required',
            'firstName' => 'required',
            'middleName' => 'nullable',
            'relationToHead' => 'required',
            'age' => 'required|numeric',
            'gender' => 'required',
            'civilStatus' => 'required',
            'educAttainment' => 'required',  // Corrected spelling
        ]);

        // Create a new Isfmember instance and save it
        $isfmember = new Isfmember($memberValidated);
        $isfmember->save();


        $houseValidated = $req->validate([

            'ownerId'=>'required|unique|numeric',
            'houseAge'=> 'required|numeric',
            'typeOfStructure'=>'required|string',
            'useOfStructure'=>'required|string',
            'NoOfFloors'=>'required|numeric',
            'typeOfHouse'=> 'required|string',
            'EstimatedFloorArea'=> 'required|decimal',
            'toiletType'=> 'required|string',
            'waterSource'=> 'required|string',
            'garbageDisposal'=> 'required | string',
            'electricitySource'=> 'required| string',
            'modeOfHouse' => 'required| string',
            'relationToOwner' => 'required |string',
           
        ]);

        $isfHouseCondition = new householdConditions($houseValidated);
        $isfHouseCondition->save();






        
        

        

        // Redirect or return a response (optional)
        return $isfHead;
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
