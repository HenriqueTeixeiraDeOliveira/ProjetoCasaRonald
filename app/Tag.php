<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public function lessons()
    {
        return $this->morphedByMany(Lesson::class, 'taggable')->withTimestamps();
    }

    public function advertisements()
    {
        return $this->morphedByMany(Advertisement::class, 'taggable')->withTimestamps();
    }
}
