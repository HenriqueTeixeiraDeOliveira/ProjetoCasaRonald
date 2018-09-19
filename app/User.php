<?php

namespace App;

use App\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable, HasRoles;

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

    public function videos()
    {
        return $this->hasMany(Video::class);
    }

    public function stickers()
    {
        return $this->belongsToMany(Sticker::class);
    }

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    public function wentToSchool()
    {
        $this->chooseSticker('escola');
    }

    public function readOneBook()
    {
        $this->chooseSticker('livro');
    }

    public function didAnActivity()
    {
        $this->chooseSticker('atividade');
    }

    public function chooseSticker($type)
    {
        $stickers_type = Sticker::all()->where('type', $type)->pluck('id')->toArray();  // Find all the stickers from a specific type
        $user_stickers = $this->stickers->pluck('id')->toArray();   // Find all the stickers that the User has
        $result = array_diff($stickers_type,$user_stickers);        // Find out witch stickers the user does not have

        if (!empty($result)) {
            $key = array_rand($result);
            $this->stickers()->attach($result[$key]);
        }
    }
}
