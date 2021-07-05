<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    const IS_USER = 1;
    const IS_ADMIN = 2;
    const IS_HEAD_ADMIN = 3;

    protected $fillable = [
        'name'
    ];

    public function users()
    {
        return $this->hasMany('App\User');
    }
}
