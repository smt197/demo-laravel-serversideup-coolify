<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
        'id',
        'user_id',
        'first_name',
        'last_name',
        'email',
        'password',
        'bio'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

}
