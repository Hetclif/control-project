<?php

namespace App\Http\Controllers\Attendance;

use App\Http\Controllers\Controller;
use App\Http\Requests\Attendance\UpdateRequest;
use App\Models\Attendance;
use App\Models\Task;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function __invoke(Task $task)
    {
        dd($task);

        return redirect()->route('attendance.index');
    }
}
