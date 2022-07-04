<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teams;
use App\Models\TeamMembers;
use App\Models\User;
class TeamsController extends Controller
{
    public function index()
    {
        return Teams::orderBy('created_at', 'desc')->get();
    }  
    public function create(Request $request)
    {
    $this->validate($request, [
        'teamID' => 'required|string',
        'team' => 'required|string',
     ]);
    $team = new Teams();
    $team->teamID = $request->teamID;
    $team->team = $request->team;
    // $facility_status->KIV = $request->KIV;
    $team->save();
    return response()->json([
        "message" => "Team capture successful"
    ], 201);
}

public function teamAll($teamID)
{
    $table = Teams::with(['TeamMembers.Teams'])->find($teamID);
    return $table;
}

public function teamAll1()
{
    $table = Teams::with(['TeamMembers.Teams.User'])->get();
    return $table;
}
}
