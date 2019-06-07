<?php

namespace MicroGames;

use Illuminate\Database\Eloquent\Model;

class gameObject extends Model
{
    protected $fillable = [
        'game_pages_id',
        'order_number',
        'kind',
        'what',
    ];

    public function gamePages()
    {
        return $this->belongsTo('MicroGames\gamePages', 'game_pages_id', 'id');
    }
}
