<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    public function actions()
    {
        return $this->morphToMany(User::class,'action')->withTimestamps();
    }
}
