<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class UserLogin extends Authenticatable
{
    use HasFactory, HasUuids;

    protected $guarded = ['id'];

    public function signature(){
        return $this->hasOne(Signature::class);
    }

}
