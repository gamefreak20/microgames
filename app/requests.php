<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class requests extends Model
{
    public function game_pages()
    {
        return $this->belongsTo('App\GamePages');
    }

}
