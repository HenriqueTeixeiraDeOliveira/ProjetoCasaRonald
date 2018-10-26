<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $appends = ['position'];

    //------------------- RELATIONSHIPS -------------------//
    public function actions()
    {
        return $this->morphToMany(User::class,'action')->withTimestamps();
        // Many to Many Polymorphic Relationship
        // BOOKs can be read for many USERs
    }

    //------------------- GET ATTRIBUTES -------------------//
    public function getPositionAttribute()
    {
        return $this->x_position . $this->y_position;
    }

    //-------------------- QUERY SCOPES --------------------//
    public function scopeOfGenre($query, $genre)
    {
        return $query->where('genre',$genre);
    }

    public function scopeOfPublisher($query, $publisher)
    {
        return $query->where('publisher',$publisher);
    }

    public function scopeOfAuthor($query, $author)
    {
        return $query->where('author',$author);
    }

    public function scopeOfYear($query, $year)
    {
        return $query->where('year',$year);
    }

    public function scopeOfXPosition($query, $x_position)
    {
        return $query->where('x_position',$x_position);
    }

    public function scopeOfYPosition($query, $y_position)
    {
        return $query->where('y_position',$y_position);
    }
}
