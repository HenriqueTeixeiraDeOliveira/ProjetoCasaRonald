<?php

namespace App\Http\Controllers;

use App\Lesson;
use Illuminate\Http\Request;

class FavoriteController extends Controller
{
    public function store(Lesson $lesson)
    {
        $lesson->favorite();
        return back();
    }

    public function destroy(Lesson $lesson)
    {
        $lesson->unfavorite();
    }
}
