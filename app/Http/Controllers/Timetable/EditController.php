<?php

namespace App\Http\Controllers\Timetable;

use App\Http\Controllers\Controller;
use App\Models\Classrooms;
use App\Models\Group;
use App\Models\Lessons;
use App\Models\Timetable;
use App\Models\User;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function __invoke(Timetable $timetable)
    {
        $users = User::all();
        $groups = Group::all();
        $classrooms = Classrooms::all();
        $lessons = Lessons::all();

        return view('timetable.edit',
            compact('timetable','groups', 'users', 'classrooms', 'lessons'));
    }
}
