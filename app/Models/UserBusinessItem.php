<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserBusinessItem extends Model
{
    use HasFactory, HasUuids;

    protected $guarded = ['id'];
    public $with = ['itemBusinessCategory'];

    public function itemBusinessCategory(){
        return $this->belongsTo(ItemBusinessCategory::class, 'item_category_id', 'id');
    }
}
