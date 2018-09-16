<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $guarded = [''];

    public function owner()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function watchable()
    {
        return $this->morphTo();
    }
}
