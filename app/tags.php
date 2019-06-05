<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tags extends Model
{
    protected $fillable = [
        'name',
    ];

    public function gamePages()
    {
        return $this->belongsToMany('App\Tags');
    }
}
