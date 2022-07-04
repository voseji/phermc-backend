<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Users extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $fillable = ['email', 'name'];
    public $incrementing = false;

    public function teammembers() {
        return $this->belongsTo(TeamMembers::class, 'memberID', 'memberID');
    }
}