<?php

namespace App\Traits;

use App\User;


trait Favoritable
{
    public function favorites()
    {
        return $this->morphToMany(User::class,'favoritable')->withTimestamps();
    }

    public function favorite($user = null)                              // Make it possible to run tests, since you can pass the user
    {
        $user = $user ?: auth()->user();                                // It will use the auth user or the one that you passed

        $attributes = ['user_id' => $user->id];                         // Pass the user-id to check if the like exists

        if (!$this->favorites()->where($attributes)->exists()) {        // If the like does NOT exist
            $this->favorites()->attach($user);                          // Create the like in the database
            return "$user->name favorited $this->title";                // NOT NECESSARY! Just to read a msg of what happened
        }
    }

    public function unfavorite($user = null)
    {
        $user = $user ?: auth()->user();

        $this->favorites()->detach($user);
    }

    public function isFavorited($user = null)
    {
        $user = $user ?: auth()->user();

        $attributes = ['user_id' => $user->id];

        return $this->favorites()->where($attributes)->count() > 0 ? true : false;
    }

    public function getIsFavoritedAttribute()
    {
        return $this->isFavorited();
    }
}