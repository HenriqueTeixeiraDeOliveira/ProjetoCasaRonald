<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public function actions()
    {
        return $this->morphToMany(User::class,'action');
    }
}
