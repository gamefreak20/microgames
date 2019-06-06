<?php

namespace App;

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
        return $this->belongsTo('App\User', 'user_id_sender', 'id');
    }
}
