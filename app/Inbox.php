<?php

namespace MicroGames;

use Illuminate\Database\Eloquent\Model;

class Inbox extends Model
{
    protected $fillable = [
        'user_id_receiver',
        'user_id_sender',
        'title',
        'text',
    ];

    public function user()
    {
        return $this->belongsTo('MicroGames\User', 'user_id_sender', 'id');
    }
}
