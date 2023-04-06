<?php

namespace App\Http\Controllers\Lesson;

use App\Http\Controllers\Controller;
use App\Models\Lessons;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function __invoke(Lessons $lesson)
    {
        $lesson->delete();

        return redirect()->route('lesson.index');
    }
}
