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

    protected $fillable = ['eID', 'KIV', 'registrationNumber', 'facilityName', 'facilityTypeID', 'facilityStatusID', 'processingStage', 'processingStageDate', 'registrationDate', 'licenseRenewalDate', 'annualRenewalFee', 'outstandingDebt', 'applicantName', 'proprietorName', 'association', 'coveringProfessional', 'facilityAddress', 'district', 'areaCouncil', 'facilityPhoneNumber', 'facilityEmail', 'beds', 'urbanization', 'staff', 'staffDocComplete', 'docCompleteDate', 'registrationType', 'captureDate', 'updatedBy', 'pin', 'special'];

    public function facility_status()
    {
        return $this->belongsTo(FacilityStatus::class, 'facilityStatusID', 'facilityStatusID');
    }
}
