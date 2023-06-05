<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KerjaSama extends Model
{
    use HasFactory;

    protected $table = 'kerja_sama';
    protected $guarded = ['id'];

    
}
