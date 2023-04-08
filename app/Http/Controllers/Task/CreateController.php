<?php

namespace App\Http\Controllers\Task;

use App\Http\Controllers\Controller;
use App\Models\Group;
use App\Models\Lessons;
use App\Models\Timetable;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function __invoke()
    {
        $timetables = Timetable::all();
        $groups = Group::all();
        $lessons = Lessons::all();

        return view('task.create',
            compact('timetables','groups' , 'lessons'));
    }
}
