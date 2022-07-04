<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegistrationType extends Model
{
    use HasFactory;
    protected $table = 'registration_type';
    protected $primaryKey = 'registrationTypeID';
    protected $fillable = ['registrationTypeID', 'registrationType'];
    public $incrementing = false;

    public function registration() {
        return $this->hasMany(Registration::class,'registrationTypeID','registrationTypeID');
    } 
}
