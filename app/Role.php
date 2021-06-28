<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = [
        'name'
    ];

    const IS_USER = 1;
    const IS_ADMIN = 2;
    const IS_HEAD_ADMIN = 3;
}
