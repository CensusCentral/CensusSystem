<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Isfhead; 
use App\Models\SurveyForms; 
use App\Models\Isfmember; 
use App\Models\householdCondition; 
use Illuminate\Support\Facades\DB;

class GraphController extends Controller
{
 
    public function totalPopulationByAllBarangays(Request $request)
    {
        try {
            // Fetch distinct barangays from the surveyForms table
            $barangays = DB::table('survey_forms')->distinct()->pluck('barangay');
    
            $data = [];
            $overallTotalPopulation = 0;
            foreach ($barangays as $barangay) {
                // Fetch all ISF heads linked to the specified barangay
                $isfheads = Isfhead::whereIn('surveyId', function($query) use ($barangay) {
                    $query->select('surveyId')
                          ->from('survey_forms')
                          ->where('barangay', $barangay);
                })->get();
                
                // Calculate the total population
                $totalPopulation = $isfheads->sum('householdSize'); // Adjust field name if necessary
                
                // Store the result
                $data[] = [
                    'barangay' => $barangay,
                    'totalPopulation' => $totalPopulation
                ];

                $overallTotalPopulation += $totalPopulation;
            }
            
            // Return JSON response with the data
            return view('dashboard.dashboard', [
                'data' => $data,
                'overallTotalPopulation'=> $overallTotalPopulation
            ]);


            
        } catch (\Exception $e) {
            return response()->json([
                'error' => 'An error occurred: ' . $e->getMessage()
            ], 500);
        }
    }



    public function ChartChange(){


        
    }
    

}
