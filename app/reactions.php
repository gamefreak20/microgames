<?php

namespace App;

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
        return $this->belongsTo('App\User');
    }

    public function gamePage()
    {
        return $this->belongsTo('App\GamePages', 'id', 'game_id');
    }
}
