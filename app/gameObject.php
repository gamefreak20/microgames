<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class gameObject extends Model
{
    public function gamePages()
    {
        return $this->belongsTo('App\gamePages', 'game_pages_id', 'id');
    }
}
