<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mail extends Model
{
    use HasFactory, HasUuids;

    protected $guarded = ['id'];

    public function userLogins(){
        return $this->belongsToMany(UserLogin::class, 'users_mail', 'mail_id', 'user_id')
        ->withPivot('status')
        ->withTimestamps();
    }
}
