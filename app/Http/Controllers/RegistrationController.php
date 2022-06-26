<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registration;

class RegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Registration::orderBy('created_at', 'desc')->get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $this->validate($request, [
            'eID' => 'required|string',
            'KIV' => 'required|numeric',
            'registrationNumber' => 'required|numeric',
            
        ]);
        $registration = new Registration();
        $registration->eID = $request->eID;
        $registration->KIV = $request->KIV;
        $registration->registrationNumber = $request->registrationNumber;
        $registration->facilityName = $request->facilityName;
        $registration->facilityTypeID = $request->facilityTypeID;
        $registration->facilityStatusID = $request->facilityStatusID;
        $registration->processingStage = $request->processingStage;
        $registration->processingStageDate = $request->processingStageDate;
        $registration->registrationDate = $request->registrationDate;
        $registration->licenseRenewalDate = $request->licenseRenewalDate;
        $registration->annualRenewalFee = $request->annualRenewalFee;
        $registration->outstandingDebt = $request->outstandingDebt;
        $registration->applicantName = $request->applicantName;
        $registration->proprietorName = $request->proprietorName;
        $registration->association = $request->association;
        $registration->coveringProfessional = $request->coveringProfessional;
        $registration->facilityAddress = $request->facilityAddress;
        $registration->district = $request->district;
        $registration->areaCouncil = $request->areaCouncil;
        $registration->facilityPhoneNumber = $request->facilityPhoneNumber;
        $registration->facilityEmail = $request->facilityEmail;
        $registration->beds = $request->beds;
        $registration->urbanization = $request->urbanization;
        $registration->staff = $request->staff;
        $registration->staffDocComplete = $request->staffDocComplete;
        $registration->docCompleteDate = $request->docCompleteDate;
        $registration->registrationType = $request->registrationType;
        $registration->captureDate = $request->captureDate;
        $registration->updatedBy = $request->updatedBy;
        $registration->pin = $request->pin;
        $registration->special = $request->special;
        $registration->save();
        return response()->json([
            "message" => "Registration successful"
        ], 201);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProductsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if ($products = Products::find($id)) {
            return response()->json([
                "message" => "Product found:",
                "data" => $products
            ], 200);
        } else {
            return response()->json([
                "message" => "Sorry this Product does not exist or wrong product code supplied."
            ], 404);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    // public function updateStudent(Request $request, $id) {
    {
        if (Products::where('productCode', $id)->exists()) {
            $products = Products::find($id);
            $products->productCode = is_null($request->productCode) ? $products->productCode : $request->productCode;
            $products->productName = is_null($request->productName) ? $products->productName : $request->productName;
            $products->productDescription = is_null($request->productDescription) ? $products->productDescription : $request->productDescription;
            $products->manufacturerId = is_null($request->manufacturerId) ? $products->manufacturerId : $request->manufacturerId;
            $products->landedCost = is_null($request->landedCost) ? $products->landedCost : $request->landedCost;
            $products->markUp = is_null($request->markUp) ? $products->markUp : $request->markUp;
            $products->discount = is_null($request->discount) ? $products->discount : $request->discount;
            $products->retailCost = is_null($request->retailCost) ? $products->retailCost : $request->retailCost;
            $products->save();

            return response()->json([
                "message" => "Product updated successfully"
            ], 200);
        } else {
            return response()->json([
                "message" => "Product not found"
            ], 404);
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        if (Products::where('productCode', $id)->exists()) {
            $products = Products::find($id);
            $products->delete();

            return response()->json([
                "message" => "This Product has successfully deleted"
            ], 202);
        } else {
            return response()->json([
                "message" => "Product not found"
            ], 404);
        }
    }
}

