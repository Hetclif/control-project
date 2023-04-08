<?php

namespace App\Http\Controllers\Task;

use App\Http\Controllers\Controller;
use App\Models\Group;
use App\Models\Lessons;
use App\Models\Task;
use App\Models\Timetable;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $tasks = Task::all();
        $timetables = Timetable::all();
        $groups = Group::all();
        $lessons = Lessons::all();

        return view('task.index',
            compact('tasks','timetables', 'groups', 'lessons'));
    }
}
