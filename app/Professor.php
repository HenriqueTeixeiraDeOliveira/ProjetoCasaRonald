<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
    public function user()
    {
        return $this->morphOne(User::class, 'character');
    }

    public function field()
    {
        return $this->belongsTo(Field::class);
    }

    public function lessons()
    {
        return $this->hasMany(Lesson::class);
    }
}
