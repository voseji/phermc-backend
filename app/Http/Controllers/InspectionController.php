<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inspection;
use App\Models\Registration;
use App\Models\InspectionType;
use App\Models\Teams;

class InspectionController extends Controller
{
    public function index()
    {
        return Inspection::orderBy('created_at', 'desc')->get();
    }  
    public function create(Request $request)
    {
    $this->validate($request, [
        'inspectionID' => 'required|string',
        'eID' => 'required|string',
     ]);
    $inspection = new Inspection();
    $inspection->inspectionID = $request->inspectionID;
    $inspection->eID = $request->eID;
    $inspection->registrationNumber = $request->registrationNumber;
    $inspection->remarks = $request->remarks;
    $inspection->teamID = $request->teamID;
    $inspection->teamLeader = $request->teamLeader;
    $inspection->inspectionTypeID = $request->inspectionTypeID;
    $inspection->save();
    return response()->json([
        "message" => "Inspection capture successful"
    ], 201);
}

public function inspectionAll()
{
    $table = Inspection::with(['InspectionType', 'Teams'])
    ->get();
    return $table;
}

public function inspectionAll2($inspectionID)
{
    $table = Inspection::with(['InspectionType', 'Teams'])
    ->find($inspectionID);
    return $table;
}

}
