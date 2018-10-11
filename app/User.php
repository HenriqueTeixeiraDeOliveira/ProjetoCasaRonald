<?php

namespace App;

use App\Traits\GetStickers;
use App\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable, HasRoles, GetStickers;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function character()
    {
        return $this->morphTo();
    }

    public function videos()
    {
        return $this->hasMany(Video::class);
    }

    public function stickers()
    {
        return $this->belongsToMany(Sticker::class, 'sticker_user', 'user_id','sticker_id')->withTimestamps();
    }

    public function roles()
    {
        return $this->belongsToMany(Role::class,'role_user', 'user_id', 'role_id')->withTimestamps();
    }

    public function schools()
    {
        return $this->morphedByMany(School::class,'action')->withTimestamps();
    }

    public function books()
    {
        return $this->morphedByMany(Book::class,'action')->withTimestamps();
    }

    public function events()
    {
        return $this->morphedByMany(Event::class,'action')->withTimestamps();
    }


}
