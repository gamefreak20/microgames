<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class gamePages extends Model
{
    public $incrementing = false;

    protected $fillable = [
        'id',
        'name',
        'user_id',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($game) {
            $game->{$game->getKeyName()} = (string) Str::uuid();
        });
    }

    public function getKeyName()
    {
        return 'id';
    }

    public function gameObject()
    {
        return $this->hasOne('App\GameObject', 'game_pages_id');
    }

    public function requests()
    {
        return $this->hasOne('App\Requests');
    }

    public function reactions()
    {
        return $this->hasMany('App\Reactions', 'game_id');
    }

    public function tags()
    {
        return $this->belongsToMany('App\Tags');
    }
}
