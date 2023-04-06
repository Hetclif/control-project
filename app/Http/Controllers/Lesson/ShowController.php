<?php

namespace App\Http\Controllers\Lesson;

use App\Http\Controllers\Controller;
use App\Models\Lessons;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __invoke(Lessons $lesson)
    {
        return view('lesson.show', compact('lesson'));
    }
}
