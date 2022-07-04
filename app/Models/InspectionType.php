<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InspectionType extends Model
{
    protected $table = 'inspection_type';
    protected $primaryKey = 'inspectionTypeID';
    protected $fillable = ['inspectionTypeID', 'inspectionType'];
    public $incrementing = false;

    public function registration() {
        return $this->hasMany(Inspection::class,'inspectionTypeID','inspectionTypeID');
    } 
}
