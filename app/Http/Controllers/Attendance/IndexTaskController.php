<?php

namespace App\Http\Controllers\Attendance;

use App\Http\Controllers\Controller;
use App\Models\Group;
use App\Models\Lessons;
use App\Models\Task;
use App\Models\Timetable;
use Illuminate\Http\Request;

class IndexTaskController extends Controller
{
    public function __invoke(Group $group,Timetable $timetable)
    {
        $tasks = Task::where('lesson_id', $timetable->id)
            ->where('completed', 2)
            ->get();

        return view('attendance.index_task',
            compact('group','timetable', 'tasks'));
    }
}
