<?php

namespace MicroGames;

use Illuminate\Database\Eloquent\Model;

class Banned extends Model
{
    protected $fillable = [
        'user_id',
        'reason',
        'permanent',
        'until',
        'banned_by',
    ];
}
