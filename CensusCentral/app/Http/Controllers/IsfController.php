<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use App\Models\Isfhead; 
use App\Models\SurveyForms; 
use App\Models\Isfmember; 
use App\Models\householdCondition; 

class IsfController extends Controller
{
   
    public function store(Request $request)
{
    $validatedData = $request->validate([
        'surveyDate' => 'required|date',
        'barangay' => 'required|string|max:255',
        'sitioPurok' => 'nullable|string|max:255',
        'interviewerName' => 'required|string|max:255',
        'areaClassification' => 'required|string|max:255',


        // isfheads validation
        'lastName' => 'required|string|max:255',
        'firstName' => 'required|string|max:255',
        'middleName' => 'nullable|string|max:255',
        'maidenName' => 'nullable|string|max:255',

        'dateOfBirth' => 'required|date',
        'age' => 'required|integer',
        'sex' => 'required|string|max:10',
        'civilStatus' => 'required|string|max:50',

        'occupation' => 'required|string|max:255',
        'workplace' => 'nullable|string|max:255',
        'address' => 'required|string|max:255',

        'communityGroup' => 'required|string|max:255',
        'gender' => 'nullable|string|max:20',
        'disability' => 'nullable|string|max:255',

        'spouseLname' => 'nullable|string|max:255',
        'spouseFname' => 'nullable|string|max:255',
        'spouseMname' => 'nullable|string|max:255',
        'spouseMaidenName' => 'nullable|string|max:255',
        'spouseDOB' => 'nullable|date',
        'spouseAge' => 'nullable|integer',
        'spouseSex' => 'nullable|string|max:10',
        
        'MedicalHistory' => 'nullable|string|max:255',

        'HouseholdClass' => 'required|string|max:255',
        'yearResidency' => 'required|integer',
        'householdSize' => 'required|integer',
        'doubleHousehold' => 'required|string|max:10',
        'indigenousOrNot' => 'required|string|max:50',
        'placeOrigin' => 'required|string|max:255',
        'reasonEstablishing' => 'required|string|max:255',
        'tenurialStatus' => 'required|string|max:50',
        'governmentResettelment' => 'required|string|max:255',
        'whichProgram' => 'nullable|string|max:255',

    ]);

    DB::beginTransaction();

    try {
        $surveyForm = SurveyForms::create([
            'surveyDate' => $validatedData['surveyDate'],
            'barangay' => $validatedData['barangay'],
            'sitioPurok' => $validatedData['sitioPurok'],
            'interviewerName' => $validatedData['interviewerName'],
            'areaClassification' => $validatedData['areaClassification'],
        ]);

        $isfhead = Isfhead::create([
            'surveyId' => $surveyForm->id,  // Link to the survey_forms table
            'lastName' => $validatedData['lastName'],
            'firstName' => $validatedData['firstName'],
            'middleName' => $validatedData['middleName']?? null,
            'maidenName' => $validatedData['maidenName']?? null,

            'dateOfBirth' => $validatedData['dateOfBirth'],
            'age' => $validatedData['age'],
            'sex' => $validatedData['sex'],
            'civilStatus' => $validatedData['civilStatus'],

            'occupation' => $validatedData['occupation'],
            'workplace' => $validatedData['workplace'] ?? null,
            'address' => $validatedData['address'],
            'communityGroup' => $validatedData['communityGroup'],
            'gender' => $validatedData['gender'] ?? null,
            'disability' => $validatedData['disability'] ?? null,


            'spouseLname' => $validatedData['spouseLname'] ?? null,
            'spouseFname' => $validatedData['spouseFname']?? null,
            'spouseMname' => $validatedData['spouseMname']?? null,
            'spouseMaidenName' => $validatedData['spouseMaidenName']?? null,
            'spouseDOB' => $validatedData['spouseDOB']?? null,
            'spouseAge' => $validatedData['spouseAge']?? null,
            'spouseSex' => $validatedData['spouseSex']?? null,
            
            'MedicalHistory' => $validatedData['MedicalHistory' ?? null],

            'HouseholdClass' => $validatedData['HouseholdClass'],
            'yearResidency' => $validatedData['yearResidency'],
            'householdSize' => $validatedData['householdSize'],
            'doubleHousehold' => $validatedData['doubleHousehold'],
            'indigenousOrNot' => $validatedData['indigenousOrNot'],
            'placeOrigin' => $validatedData['placeOrigin'],
            'reasonEstablishing' => $validatedData['reasonEstablishing'],
            'tenurialStatus' => $validatedData['tenurialStatus'],
            'governmentResettelment' => $validatedData['governmentResettelment'],
            'whichProgram' => $validatedData['whichProgram'] ?? null,
        ]);

        // If you need to perform any additional operations, do them here

        DB::commit();
        return response()->json(['message' => 'Data Insertion Successful', 'survey_id' => $surveyForm->id], 200);

    } catch (\Exception $e) {
        DB::rollBack();
        Log::error('Error saving data: ' . $e->getMessage());
        
        return response()->json([
            'message' => 'Data Insertion Failed',
            'error' => $e->getMessage(),
            'trace' => $e->getTraceAsString()
        ], 500);
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
