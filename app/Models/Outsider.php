<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Outsider extends Model
{
    use HasFactory;

    protected $connection = 'resident_mysql';

    protected $guarded = ['id'];
}
