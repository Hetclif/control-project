<?php

namespace App\Http\Controllers\Task;

use App\Http\Controllers\Controller;
use App\Models\Group;
use App\Models\Lessons;
use App\Models\Task;
use App\Models\Timetable;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function __invoke(Task $task)
    {
        $timetables = Timetable::all();
        $groups = Group::all();
        $lessons = Lessons::all();

        return view('task.edit',
            compact('task','timetables','groups', 'lessons'));
    }
}
