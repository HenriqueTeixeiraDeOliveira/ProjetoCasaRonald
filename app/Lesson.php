<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    protected $guarded = [''];

    public function video()
    {
        return $this->morphOne(Video::class, 'watchable');
    }

    public function professor()
    {
        return $this->belongsTo(Professor::class);
    }

    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }

    public function field()
    {
        return $this->subject->field();
    }

    public function tags() {
        return $this->morphToMany(Tag::class,'taggable')->withTimestamps();
    }

    public function likes() {
        return $this->morphToMany(User::class,'likable')->withTimestamps();
    }
}
