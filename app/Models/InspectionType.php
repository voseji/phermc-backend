<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InspectionType extends Model
{
    protected $table = 'inspection_type';
    protected $primaryKey = 'inspectionTypeID';
    protected $fillable = ['inspectionTypeID', 'inspectionType'];

}
