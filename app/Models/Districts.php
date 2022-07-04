<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Districts extends Model
{
    use HasFactory;
    protected $table = 'districts';
    protected $primaryKey = 'districtID';
    protected $fillable = ['districtID', 'district'];
    public $incrementing = false;

    public function areacouncil() {
        return $this->belongsTo(AreaCouncil::class, 'areaCouncilID', 'areaCouncilID');
    }
}
