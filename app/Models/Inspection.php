<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inspection extends Model
{
    protected $table = 'inspection';
    protected $primaryKey = 'inspectionID';
    protected $fillable = ['inspectionID', 'eID', 'registrationNumber'];
}
