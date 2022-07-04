<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProcessingStage extends Model
{
    protected $table = 'processing_stage';
    protected $primaryKey = 'prcessingStageID';
    protected $fillable = ['prcessingStageID', 'prcessingStage'];
    public $incrementing = false;

    public function registration() {
        return $this->hasMany(Registration::class,'processingStageID','processingStageID');
    } 
}
