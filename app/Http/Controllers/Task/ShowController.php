<?php

namespace App\Http\Controllers\Task;

use App\Http\Controllers\Controller;
use App\Models\Group;
use App\Models\Lessons;
use App\Models\Task;
use App\Models\Timetable;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __invoke(Task $task)
    {
        $timetable = Timetable::find($task->lesson_id);
        $group = Group::find($timetable->group_id);
        $lesson = Lessons::find($timetable->lesson_id);

        return view('task.show',
            compact('task','timetable','group', 'lesson'));
    }
}
