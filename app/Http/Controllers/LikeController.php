<?php

namespace App\Http\Controllers;

use App\Lesson;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

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
