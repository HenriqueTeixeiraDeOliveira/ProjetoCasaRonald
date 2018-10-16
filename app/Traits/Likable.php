<?php

namespace App\Traits;

use App\User;

trait Likable
{
    public function likes()
    {
        return $this->morphToMany(User::class,'likable')->withTimestamps();
    }

    public function like($user = null)                              // Make it possible to run tests, since you can pass the user
    {
        $user = $user ?: auth()->user();                            // It will use the auth user or the one that you passed

        $attributes = ['user_id' => $user->id];                     // Pass the user-id to check if the like exists

        if (!$this->likes()->where($attributes)->exists()) {        // If the like does NOT exist
            $this->likes()->attach($user);                          // Create the like in the database
            return "$user->name liked $this->title";                // NOT NECESSARY! Just to read a msg of what happened
        }
    }

    public function unlike($user = null)
    {
        $user = $user ?: auth()->user();

        $this->likes()->detach($user);
    }

    public function isLiked($user = null)
    {
        $user = $user ?: auth()->user();

        $attributes = ['user_id' => $user->id];

        return $this->likes->where($attributes)->count() > 0 ? true : false;
    }

    public function getIsLikedAttribute()
    {
        return $this->isLiked();
    }

    public function getLikesCountAttribute()
    {
        return $this->likes->count();
    }

}