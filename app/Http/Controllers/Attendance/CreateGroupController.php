<?php

namespace App\Http\Controllers\Attendance;

use App\Http\Controllers\Controller;
use App\Models\Attendance;
use App\Models\Group;
use App\Models\Lessons;
use App\Models\Task;
use App\Models\Timetable;
use App\Models\User;
use Illuminate\Http\Request;

class CreateGroupController extends Controller
{
    public function __invoke(Task $task)
    {
        $timetable = Timetable::find($task->lesson_id);
        $group = Group::find($timetable->group_id);
        $students = User::where('group_id', $group->id)->get();

        if(Attendance::where('task_id', $task->id)->count() == 0){
            $attendances = [];

            foreach ($students as $student){
                $newAttendance = [
                    'task_id' => $task->id,
                    'student_id' => $student->id,
                    'is_attendance' => false,
                ];
                array_push($attendances, $newAttendance);
            }

            foreach ($attendances as $attendance){
                Attendance::create($attendance);
            }

            $currAttendance = Attendance::where('task_id', $task->id)->get();

            return view('attendance.create_group',
                compact('currAttendance', 'students', 'task'));
        }
        else
        {
            $currAttendance = Attendance::where('task_id', $task->id)->get();

            $studentsAsString = implode(',', $students->pluck('id')->toArray());

            dd($studentsAsString);

            return view('attendance.create_group',
                compact('currAttendance', 'students', 'task'));
        }
    }
}
