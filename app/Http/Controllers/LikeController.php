<?php

namespace App\Http\Controllers;

use App\Lesson;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    public function store(Lesson $lesson)
    {
        $lesson->like();
        return back();
    }

    public function destroy(Lesson $lesson)
    {
        $lesson->unlike();
    }
}
