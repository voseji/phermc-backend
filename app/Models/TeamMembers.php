<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class TeamMembers extends Model
{
    use HasFactory;
    protected $table = 'team_members';
    protected $primaryKey = 'teamID';
    protected $fillable = ['teamID', 'memberID', 'email'];
    public $incrementing = false;

    public function teams() {
        return $this->belongsTo(Teams::class, 'teamID', 'teamID');
    }

    public function userses() {
        return $this->hasMany(User::class, 'memberID', 'memberID');
    }
}
