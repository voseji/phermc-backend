<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TeamMembers;
use App\Models\Users;
use App\Models\Teams;

class TeamMembersController extends Controller
{
    public function index()
    {
        return TeamMembers::orderBy('created_at', 'desc')->get();
    }  
    public function create(Request $request)
    {
    $this->validate($request, [
        'teamID' => 'required|string',
        'memberID' => 'required|string',
        'email' => 'required|string',
     ]);
    $team = new TeamMembers();
    $team->teamID = $request->teamID;
    $team->memberID = $request->memberID;
    $team->email = $request->email;
    // $facility_status->KIV = $request->KIV;
    $team->save();
    return response()->json([
        "message" => "Member capture successful"
    ], 201);
}
public function teamUsers($teamID)
{
    $table = TeamMembers::with(['Teams.TeamMembers.Teams'])->find($teamID);
    return $table;
}
}
