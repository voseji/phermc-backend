<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProcessingStage;

class ProcessingStageController extends Controller
{
    public function index()
    {
        return ProcessingStage::orderBy('created_at', 'desc')->get();
    }

    public function create(Request $request)
    {
    $this->validate($request, [
        'processingStageID' => 'required|string',
        'processingStage' => 'required|string',
     ]);
    $prcessing_stage = new ProcessingStage();
    $prcessing_stage->processingStageID = $request->processingStageID;
    $prcessing_stage->processingStage = $request->processingStage;
    $prcessing_stage->save();
    return response()->json([
        "message" => "Processing Stage capture successful"
    ], 201);
}
}
