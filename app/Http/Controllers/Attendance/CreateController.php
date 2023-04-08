<?php

namespace App\Http\Controllers\Attendance;

use App\Http\Controllers\Controller;
use App\Models\Group;
use App\Models\Lessons;
use App\Models\Timetable;
use App\Models\User;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function __invoke()
    {
        $groups = Group::all();

        return view('attendance.create',
            compact('groups'));
    }
}
