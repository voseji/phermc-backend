<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FacilityStatus extends Model
{
    protected $table = 'facility_status';
    protected $primaryKey = 'facilityStatusID';
    protected $fillable = ['facilityStatusID', 'facilityStatus'];
    public $incrementing = false;

    public function registration() {
        return $this->hasMany(Registration::class,'facilityStatusID','facilityStatusID');
    }
}
