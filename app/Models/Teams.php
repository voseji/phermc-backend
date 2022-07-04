<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teams extends Model
{
    protected $table = 'teams';
    protected $primaryKey = 'teamID';
    protected $fillable = ['teamID', 'team'];
    public $incrementing = false;

    public function inspections() {
        return $this->hasMany(Inspection::class,'teamID','teamID');
    }

    public function teammembers() {
        return $this->hasMany(TeamMembers::class,'teamID','teamID');
    }
}
