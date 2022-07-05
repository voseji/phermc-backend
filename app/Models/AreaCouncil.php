<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AreaCouncil extends Model
{
    use HasFactory;
    protected $table = 'area_councils';
    protected $primaryKey = 'areaCouncilID';
    protected $fillable = ['areaCouncilID', 'areaCouncil'];
    public $incrementing = false;

    public function districts() {
        return $this->hasMany(Districts::class,'areaCouncilID','areaCouncilID');
    }

    public function areacounciltoregistration() {
        return $this->belongsTo(Registration::class, 'areaCouncilID', 'areaCouncilID');
    }
}
