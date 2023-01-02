<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Investation extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    public $with = ['investationCategory'];

    public function getRouteKeyName()
    {
        return 'uuid';
    }

    public function investationCategory(){
        return $this->belongsTo(InvestationCategory::class);
    }
}
