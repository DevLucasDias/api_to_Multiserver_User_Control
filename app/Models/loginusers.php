<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class loginusers extends Model
{
    use HasFactory;
    protected $fillable = [

        'loginname',
        'username',
        'password',
        'userstatus',
        'permission'

    ];
}
