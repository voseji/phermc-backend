<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AreaCouncil;
use App\Models\Districts;

class AreaCouncilController extends Controller
{
    public function index()
    {
        return AreaCouncil::orderBy('created_at', 'desc')->get();
    }  
    public function create(Request $request)
    {
    $this->validate($request, [
        'areaCouncilID' => 'required|string',
        'areaCouncil' => 'required|string',
     ]);
    $areacouncil = new AreaCouncil();
    $areacouncil->areaCouncilID = $request->areaCouncilID;
    $areacouncil->areaCouncil = $request->areaCouncil;
    // $facility_status->KIV = $request->KIV;
    $areacouncil->save();
    return response()->json([
        "message" => "Area Council capture successful"
    ], 201);
} 

public function allDistricts()
{
    $alldistricts = Districts::with(['areaCouncil'])
    // ->select(['facility_type.facilityType', 'facility_type.facilityTypeID', 'registration.facilityTypeID'])
    ->get();
    return $alldistricts;
}

}
