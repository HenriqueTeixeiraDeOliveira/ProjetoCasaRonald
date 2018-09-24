<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    public function actions()
    {
        return $this->morphToMany(User::class,'action')->withTimestamps();
    }
}
