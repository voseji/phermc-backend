<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
    // use HasFactory;
class Inspection extends Model
{
    protected $table = 'inspection';
    protected $primaryKey = 'inspectionID';
    protected $fillable = ['inspectionID', 'eID', 'registrationNumber'];
    public $incrementing = false;
    // use HasFactory;
    public function inspectiontype() {
        return $this->belongsTo(InspectionType::class, 'inspectionTypeID', 'inspectionTypeID');
    }

    public function teams() {
        return $this->belongsTo(Teams::class, 'teamID', 'teamID');
    }

    public function registrations() {
        return $this->belongsTo(Registration::class, 'eID', 'eID');
    }
}
