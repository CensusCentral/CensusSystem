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
        // Custom validation messages
        $messages = [
            'surveyDate.required' => 'Survey Date is required.',
            'barangay.required' => 'Barangay is required.',
            // Add more custom messages as needed
        ];
    
        // Validate the request data
        $validatedData = $request->validate([
            // survey_forms validation
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
            'occupation' => 'nullable|string|max:255',
            'workplace' => 'nullable|string|max:255',
            'address' => 'required|string|max:255',
            'communityGroup' => 'nullable|string|max:255',
            'gender' => 'nullable|string|max:20',
            'disability' => 'nullable|string|max:255',
            'spouseLname' => 'nullable|string|max:255',
            'spouseFname' => 'nullable|string|max:255',
            'spouseMname' => 'nullable|string|max:255',
            'spouseMaidenName' => 'nullable|string|max:255',
            'spouseDOB' => 'nullable|date',
            'spouseAge' => 'nullable|integer',
            'spouseSex' => 'nullable|string|max:10',
            'spouseCommunityGroup' => 'nullable|string|max:255',
            'spouseGender' => 'nullable|string|max:20',
            'MedicalHistory' => 'nullable|string|max:255',
            'HouseholdClass' => 'required|string|max:255',
            'householdSize' => 'required|integer',
            'yearResidency' => 'required|integer',
            'doubleHousehold' => 'nullable|string|max:10',
            'indigenousOrNot' => 'nullable|string|max:50',
            'placeOrigin' => 'required|string|max:255',
            'reasonEstablishing' => 'required|string|max:255',
            'tenurialStatus' => 'required|string|max:50',
            'governmentResettelment' => 'required|string|max:255',
            'whichProgram' => 'required|string|max:255',
    
            // household_conditions validation
            'houseAge' => 'required|integer',
            'typeOfStructure' => 'required|string|max:255',
            'useOfStructure' => 'required|string|max:255',
            'NoOfFloors' => 'required|integer',
            'typeOfHouse' => 'required|string|max:255',
            'EstimatedFloorArea' => 'required|integer',
            'toiletType' => 'required|string|max:255',
            'waterSource' => 'required|string|max:255',
            'garbageDisposal' => 'required|string|max:255',
            'electricitySource' => 'required|string|max:255',
            'modeOfHouse' => 'required|string|max:255',
            'relationToOwner' => 'required|string|max:255',
    
            // isfmembers validation (multiple datasets)
            'isfmembers' => 'array',
            'isfmembers.*.lastName' => 'required|string|max:255',
            'isfmembers.*.firstName' => 'required|string|max:255',
            'isfmembers.*.middleName' => 'nullable|string|max:255',
            'isfmembers.*.maidenName' => 'nullable|string|max:255',
            'isfmembers.*.sex' => 'required|string',
            'isfmembers.*.DOB' => 'required|date',
            'isfmembers.*.age' => 'required|integer',
            'isfmembers.*.civilStatus' => 'required|string|max:50',
            'isfmembers.*.memberOccupation' => 'nullable|string|max:255',
            'isfmembers.*.placeOfWork' => 'nullable|string|max:255',
            'isfmembers.*.relationToHead' => 'required|string|max:255',
            'isfmembers.*.memberOfCommunityGroup' => 'required|string|max:255',
            'isfmembers.*.anyDisabilty' => 'nullable|string|max:255',
            'isfmembers.*.genderIdentification' => 'required|string|max:20',
            'isfmembers.*.educAttaintment' => 'required|string|max:255',
            'isfmembers.*.estimatedIncome' => 'nullable|decimal:2'
        ], $messages);
    
        try {
            // Insert data into `survey_forms`
            $surveyForm = new SurveyForms([
                'surveyDate' => $validatedData['surveyDate'],
                'barangay' => $validatedData['barangay'],
                'sitioPurok' => $validatedData['sitioPurok'],
                'interviewerName' => $validatedData['interviewerName'],
                'areaClassification' => $validatedData['areaClassification'],
            ]);
            $surveyForm->save();
    
            // Insert data into `isfheads`
            $isfheads = new Isfhead($validatedData);
            $isfheads->surveyId = $surveyForm->id; // Assign the `surveyId` to `isfheads`
            $isfheads->save();
    
            $headId = $isfheads->id;
    
            // Insert data into `household_conditions`
            $householdCondition = new HouseholdCondition([
                'ownerId' => $headId, // Foreign key to `isfheads`
                'houseAge' => $validatedData['houseAge'],
                'typeOfStructure' => $validatedData['typeOfStructure'],
                'useOfStructure' => $validatedData['useOfStructure'],
                'NoOfFloors' => $validatedData['NoOfFloors'],
                'typeOfHouse' => $validatedData['typeOfHouse'],
                'EstimatedFloorArea' => $validatedData['EstimatedFloorArea'],
                'toiletType' => $validatedData['toiletType'],
                'waterSource' => $validatedData['waterSource'],
                'garbageDisposal' => $validatedData['garbageDisposal'],
                'electricitySource' => $validatedData['electricitySource'],
                'modeOfHouse' => $validatedData['modeOfHouse'],
                'relationToOwner' => $validatedData['relationToOwner'],
            ]);
            $householdCondition->save();
    
            // Insert multiple datasets into `isfmembers`
            foreach ($validatedData['isfmembers'] as $memberData) {
                $isfmember = new Isfmember($memberData);
                $isfmember->headId = $headId; // Foreign key to `isfheads`
                $isfmember->estimatedIncome = $memberData['estimatedIncome'] ?? null;
                $isfmember->save();
            }
    
           
        } catch (\Exception $e) {
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
