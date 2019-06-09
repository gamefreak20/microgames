<?php

namespace MicroGames;

use Illuminate\Database\Eloquent\Model;

class Tags extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'name',
    ];

    public function gamePages()
    {
        return $this->belongsToMany('MicroGames\Tags');
    }
}
