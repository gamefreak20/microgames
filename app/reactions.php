<?php

namespace MicroGames;

use Illuminate\Database\Eloquent\Model;

class reactions extends Model
{
    protected $fillable = [
        'game_id',
        'user_id',
        'rating',
        'title',
        'text',
    ];
    public function user()
    {
        return $this->belongsTo('MicroGames\User');
    }

    public function gamePage()
    {
        return $this->belongsTo('MicroGames\GamePages', 'id', 'game_id');
    }
}
