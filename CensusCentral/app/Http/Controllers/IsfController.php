<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Isfhead; 

class IsfController extends Controller
{
    public function store(Request $req)
    {
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
