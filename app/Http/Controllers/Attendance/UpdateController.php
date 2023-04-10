<?php

namespace App\Http\Controllers\Attendance;

use App\Http\Controllers\Controller;
use App\Models\Attendance;
use App\Models\Task;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function __invoke(Request $request, Task $task)
    {
        $attendanceData = $request->input('attendance');

        foreach ($attendanceData as $data) {
            $attendance = Attendance::find($data['id']);
            $attendance->is_attendance = $data['is_attendance'];
            $attendance->save();
        }

        Task::find($task->id)
            ->update(['completed' => 2]);

        return redirect()->route('attendance.index');
    }
}
