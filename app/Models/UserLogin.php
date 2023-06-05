<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class UserLogin extends Authenticatable
{
    use HasFactory, HasUuids, Notifiable;

    protected $guarded = ['id'];

    public function signature(){
        return $this->hasOne(Signature::class);
    }

    public function mail(){
        return $this->belongsToMany(Mail::class, 'users_mail', 'user_id', 'mail_id');
    }



}
