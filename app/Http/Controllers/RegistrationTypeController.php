<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RegistrationType;
// use App\Models\RegistrationController

class RegistrationTypeController extends Controller
{
    public function index()
    {
        return RegistrationType::orderBy('created_at', 'desc')->get();
    }  
    public function create(Request $request)
    {
    $this->validate($request, [
        'registrationTypeID' => 'required|string',
        'registrationType' => 'required|string',
     ]);
    $table = new RegistrationType();
    $table->registrationTypeID = $request->registrationTypeID;
    $table->registrationType = $request->registrationType;
    // $facility_status->KIV = $request->KIV;
    $table->save();
    return response()->json([
        "message" => "Registration Type capture successful"
    ], 201);
}
}
