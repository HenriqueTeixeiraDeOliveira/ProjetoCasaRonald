<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Field extends Model
{
    public function professors()
    {
        return $this->hasMany(Professor::class);
    }

    public function subjects()
    {
        return$this->hasMany(Subject::class);
    }


}
