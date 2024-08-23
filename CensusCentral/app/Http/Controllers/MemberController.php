<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Isfmember; // Ensure the correct capitalization

class MemberController extends Controller
{
    public function addMember(Request $req)
    {
        // Validation of incoming request data
        $validatedData = $req->validate([
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
        $isfmember = new Isfmember($validatedData);
        $isfmember->save();

        // Return a response
        return response()->json(['message' => 'Member added successfully']);
    }
}
