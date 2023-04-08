<?php

namespace App\Http\Controllers\Attendance;

use App\Http\Controllers\Controller;
use App\Models\Group;
use App\Models\Lessons;
use App\Models\Task;
use App\Models\Timetable;
use App\Models\User;
use Illuminate\Http\Request;

class CreateGroupController extends Controller
{
    public function __invoke(Group $group)
    {
        $tasks = Task::where('completed', 1, );
        $timetables = Timetable::where('group_id', $group->id)->get();
        $users = User::where('group_id', $group->id)->get();
        $lessons = Lessons::all();



        return view('attendance.create_group',
            compact('group' ,'timetables', 'lessons', 'users'));
    }
}
