<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResidentDiedMutation extends Model
{
    use HasFactory;

    protected $connection = 'resident_mysql';
    protected $guarded = ['id'];

    public function resident(){
        return $this->belongsTo(UserData::class, 'resident_id', 'id');
    }
}
