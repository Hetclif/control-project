<?php

namespace App\Http\Controllers\Attendance;

use App\Http\Controllers\Controller;
use App\Models\Group;
use App\Models\Lessons;
use App\Models\Timetable;
use Illuminate\Http\Request;

class IndexGroupController extends Controller
{
    public function __invoke(Group $group)
    {
        $timetables = Timetable::where('group_id', $group->id)->get();
        $lessons = Lessons::all();

        return view('attendance.index_group',
            compact('group','timetables', 'lessons'));
    }
}
