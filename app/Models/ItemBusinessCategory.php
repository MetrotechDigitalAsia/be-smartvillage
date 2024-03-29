<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemBusinessCategory extends Model
{
    use HasFactory;

    protected $guarded = ['id']; 

    public function userBusinessItem(){
        return $this->hasMany(UserBusinessItem::class);
    }
}
