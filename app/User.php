<?php

namespace MicroGames;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Support\Str;

class User extends Authenticatable
{
    use HasRoles;
    use Notifiable;

    public $incrementing = false;

    protected $guard_name = 'web';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'first_name', 'last_name', 'email', 'password', 'provider_id', 'provider', 'level', 'exp', 'profile_picture',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($post) {
            $post->{$post->getKeyName()} = (string) Str::uuid();
        });
    }
    public function getKeyType()
    {
        return 'id';
    }

    public function gamePages()
    {
        return $this->hasMany('MicroGames\gamePages');
    }

    public function inbox()
    {
        return $this->hasMany('MicroGames\Inbox', 'user_id_receiver');
    }

    public function inboxSender()
    {
        return $this->hasMany('MicroGames\Inbox', 'user_id_sender');
    }

    public function banned()
    {
        return $this->hasMany('MicroGames\Banned');
    }

    public function bannedBy()
    {
        return $this->hasMany('MicroGames\Banned', 'banned_by');
    }

    public function requests()
    {
        return $this->hasMany('MicroGames\Requests');
    }

    public function requestsChecked()
    {
        return $this->hasMany('MicroGames\Requests', 'checked_by');
    }

    public function reactions()
    {
        return $this->hasMany('MicroGames\Reactions');
    }
}
