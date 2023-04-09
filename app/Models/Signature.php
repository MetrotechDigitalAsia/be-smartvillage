<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Signature extends Model
{
    use HasFactory, HasUuids;

    protected $guarded = ['id'];
    // public $with = ['userLogin'];

    public function userLogin(){
        return $this->belongsTo(UserLogin::class);
    }


}
