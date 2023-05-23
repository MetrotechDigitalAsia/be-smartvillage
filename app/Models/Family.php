<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Family extends Model
{
    use HasFactory, HasUuids;


    protected $guarded = ['id'];

    public $timestamps = false;

    public $with = ['blt'];

    public function blt(){
        return $this->belongsTo(BLT::class, 'blt_id');
    }
}
