<?php

namespace MicroGames;

use Illuminate\Database\Eloquent\Model;

class requests extends Model
{
    protected $fillable = [
        'user_id',
        'kind',
        'game_id',
        'accepted',
        'checked_by',
        'checked_text',
    ];

    public function game_pages()
    {
        return $this->belongsTo('MicroGames\GamePages');
    }

}
