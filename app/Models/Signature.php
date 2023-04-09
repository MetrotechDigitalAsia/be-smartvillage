<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Signature extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    // public $with = ['userLogin'];

    public function getRouteKeyName()
    {
        return 'uuid';
    }

    public function userLogin(){
        return $this->belongsTo(UserLogin::class);
    }


}
