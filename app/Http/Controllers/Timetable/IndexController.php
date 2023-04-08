<?php

namespace App\Http\Controllers\Timetable;

use App\Http\Controllers\Controller;
use App\Models\Classrooms;
use App\Models\Group;
use App\Models\Lessons;
use App\Models\Timetable;
use App\Models\User;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $timetables = Timetable::all();
        $users = User::all();
        $groups = Group::all();
        $classrooms = Classrooms::all();
        $lessons = Lessons::all();

        return view('timetable.index',
            compact('timetables','users', 'groups', 'classrooms', 'lessons'));
    }
}
