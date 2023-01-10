<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserBusinessItem extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    public $with = ['itemBusinessCategory'];

    public function getRouteKeyName()
    {
        return 'uuid';
    }

    public function itemBusinessCategory(){
        return $this->belongsTo(ItemBusinessCategory::class, 'item_category_id', 'id');
    }
}
