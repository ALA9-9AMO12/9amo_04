<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $rememberTokenName = false;

    protected $fillable = [
        'role_id', 'email', 'password',
    ];

    protected $hidden = [
        'password'
    ];
}
