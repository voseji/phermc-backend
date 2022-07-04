<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Districts;

class DistrictsController extends Controller
{
    public function index()
    {
        return Districts::orderBy('created_at', 'desc')->get();
    }  
    public function create(Request $request)
    {
    $this->validate($request, [
        'districtID' => 'required|string',
        'district' => 'required|string',
     ]);
    $district = new Districts();
    $district->districtID = $request->districtID;
    $district->district = $request->district;
    // $facility_status->KIV = $request->KIV;
    $district->save();
    return response()->json([
        "message" => "District capture successful"
    ], 201);
}
}
