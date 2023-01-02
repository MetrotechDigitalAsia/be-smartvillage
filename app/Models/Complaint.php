<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Complaint extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    public $with = ['complaintCategory'];

    public function getRouteKeyName()
    {
        return 'uuid';
    }

    public function complaintCategory(){
        return $this->belongsTo(ComplaintCategory::class);
    }
}
