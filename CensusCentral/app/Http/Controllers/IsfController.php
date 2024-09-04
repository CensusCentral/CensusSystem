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
    public function index()
    {
        // Fetch all Isfhead records
        $isfheads = Isfhead::paginate(5);
        // Return the records to the view
        return view('barangay.barangay', ['isfheads' => $isfheads]);
    }
    


    // FUNCTION TO PARA SA CENSUSFORM
    public function store(Request $request)
{
    // Decode JSON membersData and merge it back into the request
    // $membersData = json_decode($request->input('membersData'), true);
    // $request->merge(['membersData' => $membersData]);
   
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


        // Household Conditions validation
        'houseAge' => 'required|integer',
        'typeOfStructure' => 'required|string|max:255',
        'useOfStructure' => 'required|string|max:255',
        'NoOfFloors' => 'required|integer',
        'typeOfHouse' => 'required|string|max:255',
        'EstimatedFloorArea' => 'required|numeric',
        'toiletType' => 'required|string|max:255',
        'waterSource' => 'required|string|max:255',
        'garbageDisposal' => 'required|string|max:255',
        'electricitySource' => 'required|string|max:255',
        'modeOfHouse' => 'required|string|max:255',
        'relationToOwner' => 'required|string|max:255',


        'membersData' => 'required|array',
        
        'membersData.*.memberlastName' => 'required|string|max:255',
        'membersData.*.memberfirstName' => 'required|string|max:255',
        'membersData.*.memberMiddleName' => 'nullable|string|max:255',
        'membersData.*.memberMaidenName' => 'nullable|string|max:255',
        'membersData.*.memberSex' => 'required|string|max:10',
        'membersData.*.memberDOB' => 'required|date',
        'membersData.*.memberAge' => 'required|integer',
        'membersData.*.memberCivilStatus' => 'required|string|max:50',
        'membersData.*.memberOccupation' => 'nullable|string|max:255',
        'membersData.*.memberPlaceOfWork' => 'nullable|string|max:255',
        'membersData.*.memberRelationToHead' => 'required|string|max:255',
        'membersData.*.memberOfCommunityGroup' => 'required|string|max:255',
        'membersData.*.memberAnyDisability' => 'nullable|string|max:255',
        'membersData.*.memberGenderIdentification' => 'required|string|max:50',
        'membersData.*.memberEducAttaintment' => 'required|string|max:255',
        'membersData.*.memberEstimatedIncome' => 'nullable|numeric',
            ]);

        //    dd($validatedData);

           

    DB::beginTransaction();

    try {


        $surveyForm = SurveyForms::create([
            'surveyDate' => $validatedData['surveyDate'],
            'barangay' => $validatedData['barangay'],
            'sitioPurok' => $validatedData['sitioPurok']?? null,
            'interviewerName' => $validatedData['interviewerName'],
            'areaClassification' => $validatedData['areaClassification'],
        ]);

        $isfhead = Isfhead::create([
            'surveyId' => $surveyForm->id, 
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


        $householdCondition = householdCondition::create([
            'ownerId' => $isfhead->id, // This assumes $isfhead is available in this context
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


        foreach ($validatedData['membersData'] as $memberData) {
            Isfmember::create([
                'headId'=>$isfhead->id,
                'memberlastName' => $memberData['memberlastName'],
                'memberfirstName' => $memberData['memberfirstName'],
                'memberMiddleName' => $memberData['memberMiddleName'] ?? null,
                'memberMaidenName' => $memberData['memberMaidenName'] ?? null,
                'memberSex' => $memberData['memberSex'],
                'memberDOB' => $memberData['memberDOB'],
                'memberAge' => $memberData['memberAge'],
                'memberCivilStatus' => $memberData['memberCivilStatus'],
                'memberOccupation' => $memberData['memberOccupation'] ?? null,
                'memberPlaceOfWork' => $memberData['memberPlaceOfWork'] ?? null,
                'memberRelationToHead' => $memberData['memberRelationToHead'],
                'memberOfCommunityGroup' => $memberData['memberOfCommunityGroup'],
                'memberAnyDisability' => $memberData['memberAnyDisability'] ?? null,
                'memberGenderIdentification' => $memberData['memberGenderIdentification'],
                'memberEducAttaintment' => $memberData['memberEducAttaintment'],
                'memberEstimatedIncome' => $memberData['memberEstimatedIncome'] ?? null,
            ]);
        }

        

        DB::commit();

        return response()->json(['message' => 'Data Insertion Successful' ], 200);
        dd($validatedData);
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
