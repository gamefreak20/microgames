<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class game_pages extends Model
{
    public $incrementing = false;

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($game) {
            $game->{$game->getKeyName()} = (string) Str::uuid();
        });
    }

    public function getKeyName()
    {
        return 'string';
    }
}
