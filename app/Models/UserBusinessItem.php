<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserBusinessItem extends Model
{
    use HasFactory, HasUuids;

    protected $guarded = ['id'];
    public $with = ['itemBusinessCategory', 'itemOwner'];

    public function itemBusinessCategory(){
        return $this->belongsTo(ItemBusinessCategory::class, 'item_category_id', 'id')->select(['id','item_category']);
    }

    public function itemOwner(){
        return $this->belongsTo(UserLogin::class, 'user_id', 'id')
                ->join(env('DB_RESIDENT_DATABASE').'.residents_data', 'residents_data.no_nik', '=', 'user_logins.no_nik')
                ->select([
                    'user_logins.id as id',
                    'residents_data.nama as name'
                ]);
    }

    public function getRouteKeyName()
    {
        return 'slug;'
    }
}
