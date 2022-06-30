<?php

namespace App\Http\Controllers;
use App\Models\InspectionType;
use Illuminate\Http\Request;

class InspectionTypeController extends Controller

    {
        public function index()
        {
            return InspectionType::orderBy('created_at', 'desc')->get();
        }  
        public function create(Request $request)
        {
        $this->validate($request, [
            'inspectionTypeID' => 'required|string',
            'inspectionType' => 'required|string',
         ]);
        $inspection_type = new InspectionType();
        $inspection_type->inspectionTypeID = $request->inspectionTypeID;
        $inspection_type->inspectionType = $request->inspectionType;
        // $facility_status->KIV = $request->KIV;
        $inspection_type->save();
        return response()->json([
            "message" => "Inspection Type capture successful"
        ], 201);
    }
}
