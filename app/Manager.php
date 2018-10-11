<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Manager extends Model
{
    public function user()
    {
        return $this->morphOne(User::class, 'character');
    }
}
