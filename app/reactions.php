<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class reactions extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function gamePage()
    {
        return $this->belongsTo('App\GamePages', 'id', 'game_id');
    }
}
