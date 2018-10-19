<?php

namespace App\Traits;

use App\User;

trait Completable
{
    public function completes()
    {
        return $this->morphToMany(User::class,'completable')->withTimestamps();
    }

    public function complete($user = null)                              // Make it possible to run tests, since you can pass the user
    {
        $user = $user ?: auth()->user();                            // It will use the auth user or the one that you passed

        $attributes = ['user_id' => $user->id];                     // Pass the user-id to check if the complete exists

        if (!$this->completes()->where($attributes)->exists()) {        // If the complete does NOT exist
            $this->completes()->attach($user);                          // Create the complete in the database
            return "$user->name completed $this->title";                // NOT NECESSARY! Just to read a msg of what happened
        }
    }

    public function incomplete($user = null)
    {
        $user = $user ?: auth()->user();

        $this->completes()->detach($user);
    }

    public function isCompleted($user = null)
    {
        $user = $user ?: auth()->user();

        $attributes = ['user_id' => $user->id];

        return $this->completes()->where($attributes)->count() > 0 ? true : false;
    }

    public function getIsCompletedAttribute()
    {
        return $this->isCompleted();
    }
}