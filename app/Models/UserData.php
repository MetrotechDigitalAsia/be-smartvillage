<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserData extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $connection = 'resident_mysql';
    protected $table = 'resident_data';

    public function getRouteKeyName()
    {
        return 'uuid';
    }
}