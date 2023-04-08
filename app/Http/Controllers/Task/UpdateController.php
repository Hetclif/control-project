<?php

namespace App\Http\Controllers\Task;

use App\Http\Controllers\Controller;
use App\Http\Requests\Task\UpdateRequest;
use App\Models\Group;
use App\Models\Lessons;
use App\Models\Task;
use App\Models\Timetable;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Task $task)
    {
        $data = $request->validated();
        $data['date_time'] = Carbon::createFromFormat('d.m.Y H:i', $data['date_time'])->format('Y-m-d H:i:s');
        $task->update($data);

        $timetable = Timetable::find($task->lesson_id);
        $group = Group::find($timetable->group_id);
        $lesson = Lessons::find($timetable->lesson_id);

        return view('task.show',
            compact('task', 'timetable', 'group', 'lesson'));
    }
}
