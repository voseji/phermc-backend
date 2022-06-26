<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FacilityStatus;

class FacilityStatusController extends Controller
{
    public function index()
    {
        return FacilityStatus::orderBy('created_at', 'desc')->get();
    }  
    public function create(Request $request)
    {
    $this->validate($request, [
        'facilityStatusID' => 'required|string',
        'facilityStatus' => 'required|string',
     ]);
    $facility_status = new FacilityStatus();
    $facility_status->facilityStatusID = $request->facilityStatusID;
    $facility_status->facilityStatus = $request->facilityStatus;
    // $facility_status->KIV = $request->KIV;
    $facility_status->save();
    return response()->json([
        "message" => "Facility Status capture successful"
    ], 201);
}

}
