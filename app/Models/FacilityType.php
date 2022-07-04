<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FacilityType extends Model
{
    protected $table = 'facility_type';
    protected $primaryKey = 'facilityTypeID';
    protected $fillable = ['facilityTypeID', 'facilityType'];
    public $incrementing = false;

    public function registration() {
        return $this->hasMany(Registration::class,'facilityTypeID','facilityTypeID');
    }
}
