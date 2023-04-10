<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Attendance;
use App\Models\Task;
use App\Models\User;

class IndexController extends Controller
{
    public function __invoke()
    {
        $taskCount = Task::where('completed', 1)->count();
        $userCount = User::count();
        $taskOverdueCount = Task::where('completed', 3)->count();
        $attendancePercentage =
            round(Attendance::where('is_attendance', true)->count() / Attendance::count() * 100);

        return view('main.index',
            compact('taskOverdueCount', 'userCount', 'taskCount', 'attendancePercentage'));
    }
}
