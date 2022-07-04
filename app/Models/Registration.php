<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    protected $table = 'registration';
    protected $primaryKey = 'eID';
    public $incrementing = false;
    protected $keyType = 'string';

    // protected $appends = [
    //     'totalAvailableStock',
    //     'availableStock'tage
    // ];

    protected $fillable = ['eID', 'KIV', 'registrationNumber', 'facilityName', 'facilityTypeID', 'facilityStatusID', 'processingStage', 'processingStageDate', 'registrationDate', 'licenseRenewalDate', 'annualRenewalFee', 'outstandingDebt', 'applicantName', 'proprietorName', 'association', 'coveringProfessional', 'facilityAddress', 'districtID', 'areaCouncilID', 'facilityPhoneNumber', 'facilityEmail', 'beds', 'urbanization', 'staff', 'staffDocComplete', 'docCompleteDate', 'registrationTypeID', 'captureDate', 'updatedBy', 'pin', 'special'];

    public function facility_status()
    {
        return $this->belongsTo(FacilityStatus::class, 'facilityStatusID', 'facilityStatusID');
    }
    use HasFactory;

    public function facilityType() {
        return $this->belongsTo(FacilityType::class, 'facilityTypeID', 'facilityTypeID');
    }

    public function facilityStatus() {
        return $this->belongsTo(FacilityStatus::class, 'facilityStatusID', 'facilityStatusID');
    }

    public function processingStage() {
        return $this->belongsTo(ProcessingStage::class, 'processingStageID', 'processingStageID');
    }

    public function inspections() {
        return $this->hasMany(Inspection::class, 'eID', 'eID');
    }
}
