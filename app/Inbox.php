<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inbox extends Model
{
    protected $fillable = [
        'user_id_receever',
        'user_id_sender',
        'title',
        'text',
    ];
}
