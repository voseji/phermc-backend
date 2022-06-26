<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FacilityType;

class FacilityTypeController extends Controller
{
    public function index()
    {
        return FacilityType::orderBy('created_at', 'desc')->get();
    }  
    public function create(Request $request)
    {
    $this->validate($request, [
        'facilityTypeID' => 'required|string',
        'facilityType' => 'required|string',
     ]);
    $facility_type = new FacilityType();
    $facility_type->facilityTypeID = $request->facilityTypeID;
    $facility_type->facilityType = $request->facilityType;
    // $facility_status->KIV = $request->KIV;
    $facility_type->save();
    return response()->json([
        "message" => "Facility Type capture successful"
    ], 201);
}
}
