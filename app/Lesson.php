<?php

namespace App;

use App\Traits\Likable;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use Likable;

    protected $guarded = [''];

    protected $with = ['professor', 'likes'];

    protected $appends = ['is_liked', 'likes_count'];

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
}
