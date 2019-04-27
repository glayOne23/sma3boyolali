<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','password', 'photo', 'role',
    ];

    
    // protected $hidden = [
    //     'password', 'remember_token',
    // ];

    
    // protected $casts = [
    //     'email_verified_at' => 'datetime',
    // ];
}
