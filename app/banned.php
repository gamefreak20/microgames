<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class banned extends Model
{
    protected $fillable = [
        'user_id',
        'reason',
        'permanent',
        'until',
        'banned_by',
    ];
}
